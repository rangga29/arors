<?php

namespace App\Livewire\Umum;

use App\Services\APIHeaderGenerator;
use App\Services\NormConverter;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Livewire\Component;

class PatientCheck extends Component
{
    public $norm, $birthday, $service;
    public $isInMedin, $serviceType, $patientData;
    protected APIHeaderGenerator $apiHeaderGenerator;
    protected NormConverter $normConverter;

    public function boot(APIHeaderGenerator $apiHeaderGenerator, NormConverter $normConverter): void
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
        $this->normConverter = $normConverter;
    }

    public function render()
    {
        return view('livewire.umum.patient-check', [
            'todayDate' => Carbon::today()->format('Y-m-d')
        ])->layout('frontend.layout');
    }

    public function checkPatient(): void
    {
        $medicalNo = $this->normConverter->normConverter($this->norm);
        $headers = $this->apiHeaderGenerator->generateApiHeader();
        //$birthdate = Carbon::createFromFormat('Y-m-d', $this->birthday)->format('Ymd');
        $birthdate = Carbon::createFromFormat('d/m/Y', $this->birthday)->format('Ymd');

        $handlerStack = HandlerStack::create();
        $handlerStack->push(Middleware::retry(function ($retry, $request, $response, $exception) {
            return $retry < 10 && $exception instanceof RequestException && $exception->getCode() === 28;
        }, function ($retry) {
            return 1000 * pow(2, $retry);
        }));

        try {
            $client = new Client(['handler' => $handlerStack, 'verify' => false]);
            $response = $client->get("https://mobilejkn.rscahyakawaluyan.com/medinfrasAPI/workshop/api/patient/{$medicalNo}", [
                'headers' => $headers,
            ]);

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);
                if (isset($data['Data'])) {
                    $dataField = json_decode($data['Data'], true);
                    if ($birthdate == $dataField['DateOfBirth']) {
                        $this->isInMedin = true;
                        $this->serviceType = $this->service;
                        $this->patientData = $dataField;
                    } else {
                        session()->flash('error', 'Data Pasien Tidak Cocok');
                    }
                } else {
                    session()->flash('error', 'Data Pasien Tidak Ditemukan');
                }
            } else {
                session()->flash('error', 'Request failed. Status code: ' . $response->getStatusCode());
            }
        } catch (RequestException $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
