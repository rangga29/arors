<?php

namespace App\Livewire\Baru;

use App\Services\APIBpjsHeaderGenerator;
use App\Services\APIHeaderGenerator;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Livewire\Component;
use LZCompressor\LZString;

class BaruPatientCheck extends Component
{
    public $nik, $birthday;
    public $isInBpjs, $patientData;
    protected APIHeaderGenerator $apiHeaderGenerator;
    protected APIBpjsHeaderGenerator $apiBpjsHeaderGenerator;

    public function boot(APIHeaderGenerator $apiHeaderGenerator, APIBpjsHeaderGenerator $apiBpjsHeaderGenerator): void
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
        $this->apiBpjsHeaderGenerator = $apiBpjsHeaderGenerator;
    }

    public function render()
    {
        return view('livewire.baru.baru-patient-check', [
            'todayDate' => Carbon::today()->format('Y-m-d')
        ])->layout('frontend.layout');
    }

    public function checkPatient()
    {
        $headers = $this->apiHeaderGenerator->generateApiHeader();
        $headerBpjs = $this->apiBpjsHeaderGenerator->generateApiBpjsHeader();
        $birthdate = Carbon::createFromFormat('d/m/Y', $this->birthday)->format('Ymd');
        $birthdateBpjs = Carbon::createFromFormat('d/m/Y', $this->birthday)->format('Y-m-d');
        $regBpjsDate = Carbon::today()->format('Y-m-d');

        $handlerStackBpjs = HandlerStack::create();
        $handlerStackBpjs->push(Middleware::retry(function ($retry, $request, $response, $exception) {
            return $retry < 10 && $exception instanceof RequestException && $exception->getCode() === 28;
        }, function ($retry) {
            return 1000 * pow(2, $retry);
        }));

        try {
            $clientBpjs = new Client(['handler' => $handlerStackBpjs, 'verify' => false]);
            $responseBpjs = $clientBpjs->get("https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/peserta/nik/{$this->nik}/tglSEP/{$regBpjsDate}", [
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

                    if($bpjs_result['peserta']['mr']['noMR']) {
                        return back()->with('error', 'NIK Sudah Terdaftar di Sistem Kami dengan NORM ' . $bpjs_result['peserta']['mr']['noMR'] . '. Silahkan Daftar Sebagai Pasien Umum / BPJS.');
                    } else if($bpjs_result['peserta']['tglLahir'] != $birthdateBpjs) {
                        return back()->with('error', 'Tanggal Lahir Tidak Cocok.');
                    } else {
                        $this->isInBpjs = true;
                        $this->patientData = $bpjs_result['peserta'];
                    }
                } else {
                    return back()->with('error', 'Data Salah Atau Tidak Ditemukan.');
                }
            } else {
                return back()->with('error', 'Request failed. Status code: ' . $responseBpjs->getStatusCode());
            }

        } catch (RequestException $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
