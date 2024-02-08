<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\ScheduleDate;
use App\Models\UmumAppointment;
use App\Models\UmumAppointmentRegistration;
use App\Services\APIHeaderGenerator;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;

class ApiController extends Controller
{
    protected APIHeaderGenerator $apiHeaderGenerator;

    public function __construct(APIHeaderGenerator $apiHeaderGenerator)
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
    }

    public function getAppointmentByToken($date, $token)
    {
        $appointment = ScheduleDate::where('sd_date', $date)
            ->with([
                'schedules' => function ($query) use ($token) {
                    $query->whereHas('appointments', function ($subQuery) use ($token) {
                        $subQuery->where('ap_token', $token);
                    })->with([
                        'appointments' => function ($subQuery) use ($token) {
                            $subQuery->where('ap_token', $token);
                        },
                        'appointments.umumAppointment',
                        'appointments.asuransiAppointment',
                        'appointments.bpjsKesehatanAppointment',
                        'appointments.newAppointment',
                    ]);
                },
            ])
            ->first()->toArray();

        $umumAppointment = data_get($appointment, 'schedules.0.appointments.0.umum_appointment');
        $asuransiAppointment = data_get($appointment, 'schedules.0.appointments.0.asuransi_appointment');
        $bpjsKesehatanAppointment = data_get($appointment, 'schedules.0.appointments.0.bpjs_kesehatan_appointment');
        $newAppointment = data_get($appointment, 'schedules.0.appointments.0.new_appointment');

        if ($umumAppointment !== null) {
            if (UmumAppointmentRegistration::where('uap_id', $umumAppointment['id'])->doesntExist()) {
                $app_data = Appointment::where('ap_ucode', data_get($appointment, 'schedules.0.appointments.0.ap_ucode'))->first();
                $umum_data = UmumAppointment::where('ap_id', $app_data['id'])->first();

                $responses = [];
                $link = env('API_KEY', 'rsck');
                $headers = $this->apiHeaderGenerator->generateApiHeader();

                $requestData = [
                    'AppointmentNo' => $app_data['ap_no'],
                    'MedicalNo' => $umum_data['uap_norm']
                ];

                $handlerStack = HandlerStack::create();
                $handlerStack->push(Middleware::retry(function ($retry, $request, $response, $exception) {
                    return $retry < 3 && $exception instanceof RequestException && $exception->getCode() === 28;
                }, function ($retry) {
                    return 1000 * pow(2, $retry);
                }));

                try {
                    $client = new Client(['handler' => $handlerStack, 'verify' => false]);
                    $response = $client->post("https://mobilejkn.rscahyakawaluyan.com/medinfrasAPI/{$link}/api/appointment/insert/apm/registration1", [
                        'headers' => $headers,
                        'form_params' => $requestData
                    ]);

                    if ($response->getStatusCode() == 200) {
                        $data = json_decode($response->getBody(), true);
                        if($data['Status'] == 'SUCCESS') {
                            $dataField = json_decode($data['Data'], true);
                            $uar_data = UmumAppointmentRegistration::create([
                                'uap_id' => $umum_data['id'],
                                'uar_ucode' => $dataField['RegistrationID'],
                                'uar_no' => $dataField['RegistrationNo'],
                                'uar_date' => Carbon::createFromFormat('d-M-Y', $dataField['RegistrationDate'])->format('Y-m-d'),
                                'uar_time' => Carbon::createFromFormat('H:i', $dataField['RegistrationTime']),
                                'uar_reg_no' => $dataField['RegistrationTicketNo'],
                                'uar_reg_status' => $dataField['RegistrationStatus'],
                                'uar_session' => $dataField['Session'],
                                'uar_queue' => $dataField['QueueNo'],
                                'uar_room' => $dataField['Room'],
                            ]);
                        } else {
                            $message = $data['Status'] . ' - ' . $data['Remarks'];
                        }
                    } else {
                        $message = 'Request failed. Status code: ' . $response->getStatusCode();
                    }
                } catch (RequestException $e) {
                    $type = 'danger';
                    $message = response()->json(['error' => $e->getMessage()], 500);
                }

                return response()->json([
                    'type' => 'UMUM',
                    'message' => $message ?? 'OPR BERHASIL DIBUAT',
                    'appointment' => $appointment,
                    'uar' => $uar_data
                ]);
            } else {
                $uar_data = UmumAppointmentRegistration::where('uap_id', $umumAppointment['id'])->first();
                return response()->json([
                    'type' => 'UMUM',
                    'message' => 'OPR SUDAH PERNAH DIBUAT SEBELUMNYA',
                    'appointment' => $appointment,
                    'uar' => $uar_data
                ]);
            }
        } elseif ($asuransiAppointment !== null) {
            return response()->json([
                'type' => 'ASURANSI',
                'message' => 'MOHON MAAF ANDA TIDAK TERDAFTAR SEBAGAI PASIEN UMUM'
            ]);
        } elseif ($bpjsKesehatanAppointment !== null) {
            return response()->json([
                'type' => 'BPJS',
                'message' => 'MOHON MAAF ANDA TIDAK TERDAFTAR SEBAGAI PASIEN UMUM'
            ]);
        } elseif ($newAppointment !== null) {
            return response()->json([
                'type' => 'BARU',
                'message' => 'MOHON MAAF ANDA TIDAK TERDAFTAR SEBAGAI PASIEN UMUM'
            ]);
        } else {
            return response()->json([
                'type' => 'TIDAK ADA',
                'message' => 'KODE TOKEN TIDAK DITEMUKAN'
            ]);
        }
    }
}
