<?php

namespace App\Livewire\Fisio;

use App\Models\FisioterapiAppointment;
use App\Models\ScheduleDate;
use App\Models\UmumAppointment;
use App\Services\APIHeaderGenerator;
use App\Services\FisioMaxAppointment;
use App\Services\NormConverter;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Illuminate\Support\Str;
use Livewire\Component;

class FisioAppointment extends Component
{
    public $norm, $birthday, $service, $phone_number, $selectedDate;
    public $appointmentDates;
    protected APIHeaderGenerator $apiHeaderGenerator;
    protected NormConverter $normConverter;
    protected FisioMaxAppointment $fisioMaxAppointment;

    public function boot(APIHeaderGenerator $apiHeaderGenerator, NormConverter $normConverter, FisioMaxAppointment $fisioMaxAppointment): void
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
        $this->normConverter = $normConverter;
        $this->fisioMaxAppointment = $fisioMaxAppointment;
    }

    public function render()
    {
        return view('livewire.fisio.fisio-appointment', [
            'todayDate' => Carbon::today()->format('Y-m-d')
        ])->layout('frontend.layout');
    }

    public function mount(): void
    {
        $this->appointmentDates = ScheduleDate::where('sd_date', '>=', Carbon::today()->addDay()->format('Y-m-d'))
            ->where('sd_date', '<=', Carbon::today()->addWeek()->format('Y-m-d'))->get();
    }

    public function checkPatient()
    {
        $medicalNo = $this->normConverter->normConverter($this->norm);
        $headers = $this->apiHeaderGenerator->generateApiHeader();
        //$birthdate = Carbon::createFromFormat('Y-m-d', $this->birthday)->format('Ymd');
        $birthdate = Carbon::createFromFormat('d/m/Y', $this->birthday)->format('Ymd');
        $selectedDateFormat = ScheduleDate::where('sd_ucode', $this->selectedDate)->first();
        $selectedDateNumber = Carbon::createFromFormat('Y-m-d', $selectedDateFormat['sd_date'])->format('N');
        $maxPatients = $this->fisioMaxAppointment->getMaxPatients($selectedDateNumber, $this->service);
        $currentPatients = FisioterapiAppointment::where('sd_id', $selectedDateFormat['id'])->where('fap_type', $this->service)->count();

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
                        if($currentPatients < $maxPatients) {
                            $checkNorm = FisioterapiAppointment::where('sd_id', $selectedDateFormat['id'])->where('fap_type', $this->service)->where('fap_norm', $dataField['MedicalNo'])->count();
                            if($checkNorm == 0) {
                                do {
                                    $ucode = Str::random(20);
                                    $ucodeCheck = FisioterapiAppointment::where('fap_ucode', $ucode)->exists();
                                } while ($ucodeCheck);
                                do {
                                    $token = Str::random(6);
                                    $tokenCheck = FisioterapiAppointment::where('fap_token', $token)->exists();
                                } while ($tokenCheck);
                                FisioterapiAppointment::create([
                                    'sd_id' => $selectedDateFormat['id'],
                                    'fap_ucode' => $ucode,
                                    'fap_token' => strtoupper($token),
                                    'fap_type' => $this->service,
                                    'fap_queue' => $currentPatients + 1,
                                    'fap_registration_time' => Carbon::createFromFormat('H:i', '07:00')->addMinutes((30 * ($currentPatients + 1)))->format('H:i'),
                                    'fap_appointment_time' => Carbon::createFromFormat('H:i', '07:00')->addMinutes((30 * ($currentPatients + 1)))->addMinutes(30)->format('H:i'),
                                    'fap_norm' => $dataField['MedicalNo'],
                                    'fap_name' => $dataField['FullName'],
                                    'fap_birthday' => Carbon::createFromFormat('Ymd', $dataField['DateOfBirth'])->format('Y-m-d'),
                                    'fap_phone' => $this->phone_number
                                ]);
                                return redirect()->route('fisioterapi.final', $ucode)->with('success', 'Registrasi Berhasil Dilakukan');
                            } else {
                                session()->flash('error', 'Pasien Sudah Terdaftar Pada Tanggal Tersebut.');
                            }
                        } else {
                            session()->flash('error', 'Kuota Untuk Tanggal ' . Carbon::createFromFormat('Y-m-d', $selectedDateFormat['sd_date'])->isoFormat('dddd, DD MMMM YYYY') . ' Sudah Terpenuhi.');
                        }
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
