<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\AppointmentBackup;
use App\Models\AsuransiAppointment;
use App\Models\BpjsKesehatanAppointment;
use App\Models\BusinessPartner;
use App\Models\Clinic;
use App\Models\Log;
use App\Models\NewAppointment;
use App\Models\Schedule;
use App\Models\ScheduleBackup;
use App\Models\ScheduleDate;
use App\Models\ScheduleDateBackup;
use App\Models\UmumAppointment;
use App\Services\APIHeaderGenerator;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Exception\RequestException;

class ScheduleDateController extends Controller
{
    protected APIHeaderGenerator $apiHeaderGenerator;

    public function __construct(APIHeaderGenerator $apiHeaderGenerator)
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
    }

    public function index()
    {
        $this->authorize('viewDate', ScheduleDate::class);

        return view('backend.schedules.view-date', [
            'schedule_dates' => ScheduleDate::where('sd_date', '>=', Carbon::today()->toDateString())->get(),
            'schedule_date_first' => ScheduleDate::orderBy('sd_date', 'ASC')->first()->sd_date,
            'schedule_date_last' => ScheduleDate::orderBy('sd_date', 'DESC')->first()->sd_date
        ]);
    }

    public function showRedirect(Request $request)
    {
        $this->authorize('view', Schedule::class);

        return redirect()->route('schedules', $request['schedule-date']);
    }

    public function store(Request $request)
    {
        $this->authorize('createDate', ScheduleDate::class);

        $currentDate = Carbon::create(ScheduleDate::orderBy('sd_date', 'DESC')->first()->sd_date)->addDay();
        $endDate = Carbon::createFromFormat('Y-m-d', $request->download_date);

        while ($currentDate <= $endDate) {
            do {
                $ucode = Str::random(20);
                $ucodeCheck = ScheduleDate::where('sd_ucode', $ucode)->exists();
            } while ($ucodeCheck);
            if ($currentDate->dayOfWeek === CarbonInterface::SUNDAY) {
                ScheduleDate::create([
                    'sd_ucode' => $ucode,
                    'sd_date' => $currentDate,
                    'sd_is_downloaded' => false,
                    'sd_is_holiday' => true,
                    'sd_holiday_desc' => 'Hari Minggu',
                    'created_by' => $request->created_by,
                    'updated_by' => null,
                ]);
            } else {
                ScheduleDate::create([
                    'sd_ucode' => $ucode,
                    'sd_date' => $currentDate,
                    'sd_is_downloaded' => false,
                    'sd_is_holiday' => false,
                    'sd_holiday_desc' => null,
                    'created_by' => $request->created_by,
                    'updated_by' => null,
                ]);
            }
            $currentDate->addDay();
        }

        $sc_dates = ScheduleDate::all();
        foreach ($sc_dates as $sc_date) {
            if ($sc_date->sd_date < Carbon::today()->format('Y-m-d')) {
                ScheduleDateBackup::create([
                    'sdb_ucode' => $sc_date->sd_ucode,
                    'sdb_date' => $sc_date->sd_date,
                    'sdb_is_downloaded' => $sc_date->sd_is_downloaded,
                    'sdb_is_holiday' => $sc_date->sd_is_holiday,
                    'sd_holiday_desc' => $sc_date->sd_holiday_desc,
                    'created_by' => $sc_date->created_by,
                    'updated_by' => $sc_date->updated_by
                ]);
                $sc_all = Schedule::where('sd_id', $sc_date->id)->get();
                foreach ($sc_all as $sc) {
                    $sc_data = ScheduleBackup::create([
                        'scb_ucode' => $sc->sc_ucode,
                        'scb_date' => $sc_date->sd_date,
                        'scb_doctor_code' => $sc->sc_doctor_code,
                        'scb_doctor_name' => $sc->sc_doctor_name,
                        'scb_clinic_code' => $sc->sc_clinic_code,
                        'scb_clinic_name' => $sc->sc_clinic_name,
                        'scb_operational_time_code' => $sc->sc_operational_time_code,
                        'scb_operational_time_name' => $sc->sc_operational_time_name,
                        'scb_start_time' => $sc->sc_start_time,
                        'scb_end_time' => $sc->sc_end_time,
                        'scb_umum' => $sc->sc_umum,
                        'scb_bpjs' => $sc->sc_bpjs,
                        'scb_max_umum' => $sc->sc_max_umum,
                        'scb_max_bpjs' => $sc->sc_max_bpjs,
                        'scb_online_umum' => $sc->sc_online_umum,
                        'scb_online_bpjs' => $sc->sc_online_bpjs,
                        'scb_available' => $sc->sc_available,
                        'created_by' => $sc->created_by,
                        'updated_by' => $sc->updated_by,
                    ]);
                    $ap_all = Appointment::where('sc_id', $sc->id)->get();
                    foreach ($ap_all as $ap) {
                        $uap_all = UmumAppointment::where('ap_id', $ap->id)->get();
                        foreach ($uap_all as $uap) {
                            AppointmentBackup::create([
                                'scb_id' => $sc_data['id'],
                                'apb_ucode' => $ap->ap_ucode,
                                'apb_no' => $ap->ap_no,
                                'apb_token' => $ap->ap_token,
                                'apb_queue' => $ap->ap_queue,
                                'apb_type' => $ap->ap_type,
                                'apb_registration_time' => $ap->ap_registration_time,
                                'apb_appointment_time' => $ap->ap_appointment_time,
                                'apb_norm' => $uap->uap_norm,
                                'apb_name' => $uap->uap_name,
                                'apb_birthday' => $uap->uap_birthday,
                                'apb_phone' => $uap->uap_phone,
                                'apb_business_partner' => '',
                                'apb_bpjs' => '',
                                'apb_ppk1' => '',
                                'apb_skdp' => '',
                                'apb_ssn' => '',
                                'apb_gender' => '',
                                'apb_address' => '',
                                'apb_email' => ''
                            ]);
                            UmumAppointment::where('ap_id', $uap->ap_id)->where('uap_norm', $uap->uap_norm)->delete();
                        }

                        $aap_all = AsuransiAppointment::where('ap_id', $ap->id)->get();
                        foreach ($aap_all as $aap) {
                            $bp_name = BusinessPartner::where('id', $aap->bp_id)->first()->bp_name;
                            AppointmentBackup::create([
                                'scb_id' => $sc_data['id'],
                                'apb_ucode' => $ap->ap_ucode,
                                'apb_no' => $ap->ap_no,
                                'apb_token' => $ap->ap_token,
                                'apb_queue' => $ap->ap_queue,
                                'apb_type' => $ap->ap_type,
                                'apb_registration_time' => $ap->ap_registration_time,
                                'apb_appointment_time' => $ap->ap_appointment_time,
                                'apb_norm' => $aap->aap_norm,
                                'apb_name' => $aap->aap_name,
                                'apb_birthday' => $aap->aap_birthday,
                                'apb_phone' => $aap->aap_phone,
                                'apb_business_partner' => $bp_name,
                                'apb_bpjs' => '',
                                'apb_ppk1' => '',
                                'apb_skdp' => '',
                                'apb_ssn' => '',
                                'apb_gender' => '',
                                'apb_address' => '',
                                'apb_email' => ''
                            ]);
                            AsuransiAppointment::where('ap_id', $aap->ap_id)->where('aap_norm', $aap->aap_norm)->delete();
                        }

                        $bap_all = BpjsKesehatanAppointment::where('ap_id', $ap->id)->get();
                        foreach ($bap_all as $bap) {
                            AppointmentBackup::create([
                                'scb_id' => $sc_data['id'],
                                'apb_ucode' => $ap->ap_ucode,
                                'apb_no' => $ap->ap_no,
                                'apb_token' => $ap->ap_token,
                                'apb_queue' => $ap->ap_queue,
                                'apb_type' => $ap->ap_type,
                                'apb_registration_time' => $ap->ap_registration_time,
                                'apb_appointment_time' => $ap->ap_appointment_time,
                                'apb_norm' => $bap->bap_norm,
                                'apb_name' => $bap->bap_name,
                                'apb_birthday' => $bap->bap_birthday,
                                'apb_phone' => $bap->bap_phone,
                                'apb_business_partner' => '',
                                'apb_bpjs' => $bap->bap_bpjs,
                                'apb_ppk1' => $bap->bap_ppk1,
                                'apb_skdp' => $bap->bap_skdp,
                                'apb_ssn' => '',
                                'apb_gender' => '',
                                'apb_address' => '',
                                'apb_email' => ''
                            ]);
                            BpjsKesehatanAppointment::where('ap_id', $bap->ap_id)->where('bap_norm', $bap->bap_norm)->delete();
                        }

                        $nap_all = NewAppointment::where('ap_id', $ap->id)->get();
                        foreach ($nap_all as $nap) {
                            AppointmentBackup::create([
                                'scb_id' => $sc_data['id'],
                                'apb_ucode' => $ap->ap_ucode,
                                'apb_no' => $ap->ap_no,
                                'apb_token' => $ap->ap_token,
                                'apb_queue' => $ap->ap_queue,
                                'apb_type' => $ap->ap_type,
                                'apb_registration_time' => $ap->ap_registration_time,
                                'apb_appointment_time' => $ap->ap_appointment_time,
                                'apb_norm' => $nap->nap_norm,
                                'apb_name' => $nap->nap_name,
                                'apb_birthday' => $nap->nap_birthday,
                                'apb_phone' => $nap->nap_phone,
                                'apb_business_partner' => '',
                                'apb_bpjs' => '',
                                'apb_ppk1' => '',
                                'apb_skdp' =>'',
                                'apb_ssn' => $nap->nap_ssn,
                                'apb_gender' => $nap->nap_gender,
                                'apb_address' => $nap->nap_address,
                                'apb_email' => $nap->nap_email
                            ]);
                            NewAppointment::where('ap_id', $nap->ap_id)->where('nap_ssn', $nap->nap_ssn)->delete();
                        }
                    }
                    Schedule::where('sc_ucode', $sc->sc_ucode)->delete();
                }
                ScheduleDate::where('sd_ucode', $sc_date->sd_ucode)->delete();
            }
        }

        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'SCHEDULE DATE',
            'lo_message' => 'CREATE : Until ' . $endDate . ' And Backup Older Date'
        ]);
        return redirect()->route('schedules.dates')->with('success', 'Data Tanggal Berhasil Ditambah');
    }

    public function download(ScheduleDate $scheduleDate)
    {
        $this->authorize('download', Schedule::class);

        $responses = [];
        $link = env('API_KEY', 'rsck');
        $clinics = Clinic::where('cl_active', true)->orderBy('cl_name')->pluck('cl_code')->all();
        $schedule_date = Carbon::create($scheduleDate['sd_date'])->format('Ymd');
        $headers = $this->apiHeaderGenerator->generateApiHeader();

        $type = 'success';
        $message = 'Download Jadwal Tanggal ' . Carbon::create($scheduleDate['sd_date'])->isoFormat('DD MMMM YYYY') . ' Berhasil Dilakukan.';

        $handlerStack = HandlerStack::create();
        $handlerStack->push(Middleware::retry(function ($retry, $request, $response, $exception) {
            return $retry < 3 && $exception instanceof RequestException && $exception->getCode() === 28;
        }, function ($retry) {
            return 1000 * pow(2, $retry);
        }));

        foreach ($clinics as $clinic) {
            try {
                $client = new Client(['handler' => $handlerStack, 'verify' => false]);
                $response = $client->get("https://mobilejkn.rscahyakawaluyan.com/medinfrasAPI/{$link}/api/physician/available/{$schedule_date}/{$clinic}", [
                    'headers' => $headers,
                ]);

                if ($response->getStatusCode() == 200) {
                    $data = json_decode($response->getBody(), true);
                    if (!empty($data['Data'])) {
                        $dataField = json_decode($data['Data'], true);
                        for ($x = 0; $x < count($dataField); $x++) {
                            do {
                                $randomString = Str::random(20);
                            } while (Schedule::where('sc_ucode', $randomString)->exists());

                            Schedule::create([
                                'sc_ucode' => $randomString,
                                'sd_id' => $scheduleDate->id,
                                'sc_doctor_code' => $dataField[$x]['PhysicianCode'],
                                'sc_doctor_name' => $dataField[$x]['PhysicianName'],
                                'sc_clinic_code' => $dataField[$x]['PhysicianOperationalTime']['ServiceUnitCode'],
                                'sc_clinic_name' => $dataField[$x]['PhysicianOperationalTime']['ServiceUnitName'],
                                'sc_operational_time_code' => $dataField[$x]['PhysicianOperationalTime']['OperationalTimeCode'],
                                'sc_operational_time_name' => $dataField[$x]['PhysicianOperationalTime']['OperationalTimeName'],
                                'sc_start_time' => $dataField[$x]['PhysicianOperationalTime']['StartTime1'],
                                'sc_end_time' => $dataField[$x]['PhysicianOperationalTime']['EndTime1'],
                                'sc_umum' => $dataField[$x]['PhysicianOperationalTime']['IsNonBPJS1'],
                                'sc_bpjs' => $dataField[$x]['PhysicianOperationalTime']['IsBPJS1'],
                                'sc_max_umum' => $dataField[$x]['PhysicianOperationalTime']['MaximumAppointmentBPJS1'],
                                'sc_max_bpjs' => $dataField[$x]['PhysicianOperationalTime']['MaximumAppointmentNonBPJS1'],
                                'sc_online_umum' => $dataField[$x]['PhysicianOperationalTime']['OnlineAppointmentBPJS1'],
                                'sc_online_bpjs' => $dataField[$x]['PhysicianOperationalTime']['OnlineAppointmentNonBPJS1'],
                                'sc_available' => true,
                                'created_by' => auth()->user()->username,
                            ]);
                        }
                    }
                    $scheduleDate->update([
                        'sd_is_downloaded' => true
                    ]);
                } else {
                    $type = 'danger';
                    $message = response()->json(['error' => 'Request failed'], $response->getStatusCode());
                }
            } catch (RequestException $e) {
                $type = 'danger';
                $message = response()->json(['error' => $e->getMessage()], 500);
            }
        }

        date_default_timezone_set('Asia/Jakarta');
        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'SCHEDULE',
            'lo_message' => 'DOWNLOAD : ' . $scheduleDate['sd_date']
        ]);
        return redirect()->route('schedules.dates')->with($type, $message);
    }

    public function downloadUpdate(ScheduleDate $scheduleDate)
    {
        $this->authorize('update', Schedule::class);

        $responses = [];
        $link = env('API_KEY', 'rsck');
        $clinics = Clinic::where('cl_active', true)->orderBy('cl_name')->pluck('cl_code')->all();
        $schedule_date = Carbon::create($scheduleDate['sd_date'])->format('Ymd');
        $headers = $this->apiHeaderGenerator->generateApiHeader();

        $type = 'success';
        $message = 'Update Download Jadwal Tanggal ' . Carbon::create($scheduleDate['sd_date'])->isoFormat('DD MMMM YYYY') . ' Berhasil Dilakukan.';

        $handlerStack = HandlerStack::create();
        $handlerStack->push(Middleware::retry(function ($retry, $request, $response, $exception) {
            return $retry < 3 && $exception instanceof RequestException && $exception->getCode() === 28;
        }, function ($retry) {
            return 1000 * pow(2, $retry);
        }));

        foreach ($clinics as $clinic) {
            try {
                $client = new Client(['handler' => $handlerStack, 'verify' => false]);
                $response = $client->get("https://mobilejkn.rscahyakawaluyan.com/medinfrasAPI/{$link}/api/physician/available/{$schedule_date}/{$clinic}", [
                    'headers' => $headers,
                ]);

                if ($response->getStatusCode() == 200) {
                    $data = json_decode($response->getBody(), true);
                    if (!empty($data['Data'])) {
                        $dataField = json_decode($data['Data'], true);
                        for ($x = 0; $x < count($dataField); $x++) {
                            do {
                                $randomString = Str::random(20);
                            } while (Schedule::where('sc_ucode', $randomString)->exists());

                            $schedules = Schedule::where('sd_id', $scheduleDate->id)
                                ->where('sc_doctor_code', $dataField[$x]['PhysicianCode'])
                                ->where('sc_clinic_code', $dataField[$x]['PhysicianOperationalTime']['ServiceUnitCode'])
                                ->first();

                            if($schedules) {
                                $schedules->update([
                                    'sc_operational_time_code' => $dataField[$x]['PhysicianOperationalTime']['OperationalTimeCode'],
                                    'sc_operational_time_name' => $dataField[$x]['PhysicianOperationalTime']['OperationalTimeName'],
                                    'sc_start_time' => $dataField[$x]['PhysicianOperationalTime']['StartTime1'],
                                    'sc_end_time' => $dataField[$x]['PhysicianOperationalTime']['EndTime1'],
                                    'sc_umum' => $dataField[$x]['PhysicianOperationalTime']['IsNonBPJS1'],
                                    'sc_bpjs' => $dataField[$x]['PhysicianOperationalTime']['IsBPJS1'],
                                    'sc_max_umum' => $dataField[$x]['PhysicianOperationalTime']['MaximumAppointmentBPJS1'],
                                    'sc_max_bpjs' => $dataField[$x]['PhysicianOperationalTime']['MaximumAppointmentNonBPJS1'],
                                    'sc_online_umum' => $dataField[$x]['PhysicianOperationalTime']['OnlineAppointmentBPJS1'],
                                    'sc_online_bpjs' => $dataField[$x]['PhysicianOperationalTime']['OnlineAppointmentNonBPJS1'],
                                    'updated_by' => auth()->user()->username,
                                ]);
                            } else {
                                Schedule::create([
                                    'sc_ucode' => $randomString,
                                    'sd_id' => $scheduleDate->id,
                                    'sc_doctor_code' => $dataField[$x]['PhysicianCode'],
                                    'sc_doctor_name' => $dataField[$x]['PhysicianName'],
                                    'sc_clinic_code' => $dataField[$x]['PhysicianOperationalTime']['ServiceUnitCode'],
                                    'sc_clinic_name' => $dataField[$x]['PhysicianOperationalTime']['ServiceUnitName'],
                                    'sc_operational_time_code' => $dataField[$x]['PhysicianOperationalTime']['OperationalTimeCode'],
                                    'sc_operational_time_name' => $dataField[$x]['PhysicianOperationalTime']['OperationalTimeName'],
                                    'sc_start_time' => $dataField[$x]['PhysicianOperationalTime']['StartTime1'],
                                    'sc_end_time' => $dataField[$x]['PhysicianOperationalTime']['EndTime1'],
                                    'sc_umum' => $dataField[$x]['PhysicianOperationalTime']['IsNonBPJS1'],
                                    'sc_bpjs' => $dataField[$x]['PhysicianOperationalTime']['IsBPJS1'],
                                    'sc_max_umum' => $dataField[$x]['PhysicianOperationalTime']['MaximumAppointmentBPJS1'],
                                    'sc_max_bpjs' => $dataField[$x]['PhysicianOperationalTime']['MaximumAppointmentNonBPJS1'],
                                    'sc_online_umum' => $dataField[$x]['PhysicianOperationalTime']['OnlineAppointmentBPJS1'],
                                    'sc_online_bpjs' => $dataField[$x]['PhysicianOperationalTime']['OnlineAppointmentNonBPJS1'],
                                    'sc_available' => true,
                                    'created_by' => auth()->user()->username,
                                ]);
                            }
                        }
                    }
                } else {
                    $type = 'danger';
                    $message = response()->json(['error' => 'Request failed'], $response->getStatusCode());
                }
            } catch (RequestException $e) {
                $type = 'danger';
                $message = response()->json(['error' => $e->getMessage()], 500);
            }
        }

        date_default_timezone_set('Asia/Jakarta');
        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'SCHEDULE',
            'lo_message' => 'UPDATE DOWNLOAD : ' . $scheduleDate['sd_date']
        ]);
        return redirect()->route('schedules.dates')->with($type, $message);
    }

    public function show(ScheduleDate $scheduleDate)
    {
        $this->authorize('editDate', ScheduleDate::class);

        $data = ScheduleDate::where('sd_ucode', $scheduleDate->sd_ucode)->first();
        return response()->json($data);
    }

    public function update(Request $request, ScheduleDate $scheduleDate)
    {
        $this->authorize('editDate', ScheduleDate::class);

        $validateData = $request->validate([
            'sd_is_holiday' => 'required|boolean',
            'sd_holiday_desc' => 'nullable|required_if:sd_is_holiday,false'
        ],[
            'sd_holiday_desc.required_if' => 'Deskripsi Libur Harus Diisi'
        ]);

        if(!$validateData['sd_is_holiday']) {
            $validateData['sd_holiday_desc'] = '';
        }
        $scheduleDate->update($validateData);
        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'SCHEDULE DATE',
            'lo_message' => 'UPDATE : ' . $scheduleDate->sd_date
        ]);
        return redirect()->route('schedules.dates')->with('success', 'Data Tanggal Berhasil Diubah');
    }

    public function destroy(ScheduleDate $scheduleDate)
    {
        $this->authorize('delete', Schedule::class);

        $schedules = Schedule::where('sd_id', $scheduleDate->id)->get();
        foreach ($schedules as $schedule) {
            $schedule->delete();
        }
        $scheduleDate->update([
            'sd_is_downloaded' => false
        ]);
        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'SCHEDULE',
            'lo_message' => 'DELETE : ' . $scheduleDate->sd_date
        ]);
        return redirect()->route('schedules.dates')->with('success', 'Hapus Jadwal Tanggal ' . Carbon::parse($scheduleDate['sd_date'])->isoFormat('DD MMMM YYYY') . ' Berhasil Dilakukan.');
    }
}
