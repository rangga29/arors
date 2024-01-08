<?php

namespace App\Livewire\Bpjs;

use App\Services\APIBpjsHeaderGenerator;
use App\Services\APIHeaderGenerator;
use App\Services\NormConverter;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Livewire\Component;
use LZCompressor\LZString;

class BpjsPatientCheck extends Component
{
    public $norm, $birthday, $ppk1;
    public $isInMedin, $patientData, $bpjsData;
    protected APIHeaderGenerator $apiHeaderGenerator;
    protected NormConverter $normConverter;
    protected APIBpjsHeaderGenerator $apiBpjsHeaderGenerator;

    public function boot(APIHeaderGenerator $apiHeaderGenerator, NormConverter $normConverter, APIBpjsHeaderGenerator $apiBpjsHeaderGenerator): void
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
        $this->normConverter = $normConverter;
        $this->apiBpjsHeaderGenerator = $apiBpjsHeaderGenerator;
    }

    public function render()
    {
        return view('livewire.bpjs.bpjs-patient-check', [
            'todayDate' => Carbon::today()->format('Y-m-d')
        ])->layout('frontend.layout');
    }

    public function checkPatient()
    {
        $medicalNo = $this->normConverter->normConverter($this->norm);
        $headers = $this->apiHeaderGenerator->generateApiHeader();
        $headerBpjs = $this->apiBpjsHeaderGenerator->generateApiBpjsHeader();
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

            if ($response->getStatusCode() == 200)
            {
                $data = json_decode($response->getBody(), true);
                if (isset($data['Data'])) {
                    $dataField = json_decode($data['Data'], true);
                    if ($birthdate == $dataField['DateOfBirth']) {
                        $handlerStackBpjs = HandlerStack::create();
                        $handlerStackBpjs->push(Middleware::retry(function ($retry, $request, $response, $exception) {
                            return $retry < 10 && $exception instanceof RequestException && $exception->getCode() === 28;
                        }, function ($retry) {
                            return 1000 * pow(2, $retry);
                        }));

                        try {
                            $clientBpjs = new Client(['handler' => $handlerStackBpjs, 'verify' => false]);
                            $responseBpjs = $clientBpjs->get("https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/rujukan/{$this->ppk1}", [
                                'headers' => $headerBpjs,
                            ]);

                            if ($responseBpjs->getStatusCode() == 200)
                            {
                                $dataBpjs = json_decode($responseBpjs->getBody(), true);
                                if($dataBpjs['metaData']['code'] == 200)
                                {
                                    date_default_timezone_set('UTC');
                                    $bpjs_time_stamp = strtotime('now');

                                    $bpjs_consumer_id = "25796";
                                    $bpjs_consumer_secret = "4qP1E30D6D";

                                    $bpjs_key_dec = $bpjs_consumer_id . $bpjs_consumer_secret . $bpjs_time_stamp;
                                    $bpjs_key_hash = hex2bin(hash('SHA256', $bpjs_key_dec));
                                    $bpjs_key_iv = substr($bpjs_key_hash, 0, 16);

                                    $bpjs_decryptResult = openssl_decrypt(base64_decode($dataBpjs['response']), 'AES-256-CBC', $bpjs_key_hash, OPENSSL_RAW_DATA, $bpjs_key_iv);
                                    if(!$bpjs_decryptResult) {
                                        return back()->with('error', 'Terjadi Kesalahan. Silahkan Dicoba Kembali.');
                                    }
                                    $bpjs_unCompressedResult = LZString::decompressFromEncodedURIComponent($bpjs_decryptResult);
                                    $bpjs_result = json_decode($bpjs_unCompressedResult, TRUE);

                                    if($bpjs_result['rujukan']['peserta']['mr']['noMR'] == $dataField['MedicalNo'] || $bpjs_result['rujukan']['peserta']['nik'] == $dataField['SSN'])
                                    {
                                        $this->isInMedin = true;
                                        $this->patientData = $dataField;
                                        $this->bpjsData = $bpjs_result['rujukan'];
                                    } else {
                                        return back()->with('error', 'No Rujukan Tidak Cocok Dengan Data Pasien.');
                                    }
                                } else {
                                    return back()->with('error', 'No Rujukan Tidak Ditemukan atau Salah.');
                                }
                            } else {
                                return back()->with('error', 'Request failed. Status code: ' . $response->getStatusCode());
                            }
                        } catch (RequestException $e) {
                            return back()->with('error', 'An error occurred: ' . $e->getMessage());
                        }
                    } else {
                        return back()->with('error', 'Data Pasien Tidak Cocok');
                    }
                } else {
                    return back()->with('error', 'Data Pasien Tidak Ditemukan');
                }
            } else {
                return back()->with('error', 'Request failed. Status code: ' . $response->getStatusCode());
            }
        } catch (RequestException $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
