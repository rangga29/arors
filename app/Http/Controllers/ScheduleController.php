<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Log;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use App\Services\APIHeaderGenerator;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    protected APIHeaderGenerator $apiHeaderGenerator;

    public function __construct(APIHeaderGenerator $apiHeaderGenerator)
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
    }
    public function index($date)
    {
        $this->authorize('view', Schedule::class);

        return view('backend.schedules.view', [
            'date_original' => $date,
            'date' => Carbon::parse($date)->isoFormat('dddd, DD MMMM YYYY'),
            'schedule_date_first' => ScheduleDate::orderBy('sd_date', 'ASC')->first()->sd_date,
            'schedule_date_last' => ScheduleDate::orderBy('sd_date', 'DESC')->first()->sd_date,
            'schedules' => Schedule::where('sd_id', ScheduleDate::where('sd_date', $date)->first()->id)
                ->orderBy('sc_clinic_name')
                ->orderBy('sc_doctor_name')
                ->get()
        ]);
    }

    public function available($date, Request $request, Schedule $schedule)
    {
        $this->authorize('update', Schedule::class);

        $date = ScheduleDate::where('id', $schedule->sd_id)->first()->sd_date;
        if($schedule->sc_available) {
            $schedule->update([
                'sc_available' => false,
                'updated_by' => auth()->user()->name
            ]);

            Log::create([
                'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
                'lo_user' => auth()->user()->username,
                'lo_ip' => \Request::ip(),
                'lo_module' => 'SCHEDULE',
                'lo_message' => 'Non Activated Schedule | ' . $date . ' -- ' . $schedule->sc_clinic_code . ' -- ' . $schedule->sc_clinic_name
            ]);

            return redirect()->route('schedules', $date)->with('success', 'Jadwal ' . $schedule->sc_clinic_name . ' Untuk ' . $schedule->sc_clinic_name . ' Berhasil Di Non Aktifkan.');
        } else {
            $schedule->update([
                'sc_available' => true,
                'updated_by' => auth()->user()->name
            ]);

            Log::create([
                'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
                'lo_user' => auth()->user()->username,
                'lo_ip' => \Request::ip(),
                'lo_module' => 'SCHEDULE',
                'lo_message' => 'Activated Schedule | ' . $date . ' -- ' . $schedule->sc_clinic_code . ' -- ' . $schedule->sc_clinic_name
            ]);

            return redirect()->route('schedules', $date)->with('success', 'Jadwal ' . $schedule->sc_clinic_name . ' Untuk ' . $schedule->sc_doctor_name . ' Berhasil Di Aktifkan.');
        }
    }

    public function update($date, Schedule $schedule)
    {
        $responses = [];
        $link = env('API_KEY', 'rsck');
        $clinic = Clinic::where('cl_code', $schedule['sc_clinic_code'])->pluck('cl_code')->first();
        $schedule_date = Carbon::create($date)->format('Ymd');
        $headers = $this->apiHeaderGenerator->generateApiHeader();

        $type = 'success';
        $message = 'Update Jadwal ' .  $schedule['sc_doctor_name'] . ' Tanggal ' . Carbon::create($date)->isoFormat('DD MMMM YYYY') . ' Berhasil Dilakukan.';

        $handlerStack = HandlerStack::create();
        $handlerStack->push(Middleware::retry(function ($retry, $request, $response, $exception) {
            return $retry < 3 && $exception instanceof RequestException && $exception->getCode() === 28;
        }, function ($retry) {
            return 1000 * pow(2, $retry);
        }));

        try {
            $client = new Client(['handler' => $handlerStack, 'verify' => false]);
            $response = $client->get("https://mobilejkn.rscahyakawaluyan.com/medinfrasAPI/{$link}/api/physician/available/{$schedule_date}/{$clinic}", [
                'headers' => $headers,
            ]);

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);
                if (!empty($data['Data'])) {
                    $dataField = json_decode($data['Data'], true);
                    foreach ($dataField as $data)
                    {
                        if($data['PhysicianCode'] == $schedule['sc_doctor_code'] && $data['PhysicianOperationalTime']['ServiceUnitCode'] == $schedule['sc_clinic_code']) {
                            $schedule->update([
                                'sc_operational_time_code' => $data['PhysicianOperationalTime']['OperationalTimeCode'],
                                'sc_operational_time_name' => $data['PhysicianOperationalTime']['OperationalTimeName'],
                                'sc_start_time' => $data['PhysicianOperationalTime']['StartTime1'],
                                'sc_end_time' => $data['PhysicianOperationalTime']['EndTime1'],
                                'sc_umum' => $data['PhysicianOperationalTime']['IsNonBPJS1'],
                                'sc_bpjs' => $data['PhysicianOperationalTime']['IsBPJS1'],
                                'sc_max_umum' => $data['PhysicianOperationalTime']['MaximumAppointmentBPJS1'],
                                'sc_max_bpjs' => $data['PhysicianOperationalTime']['MaximumAppointmentNonBPJS1'],
                                'sc_online_umum' => $data['PhysicianOperationalTime']['OnlineAppointmentBPJS1'],
                                'sc_online_bpjs' => $data['PhysicianOperationalTime']['OnlineAppointmentNonBPJS1'],
                                'updated_by' => auth()->user()->username,
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

        date_default_timezone_set('Asia/Jakarta');
        Log::create([
            'lo_time' => Carbon::now()->format('Y-m-d H:i:s'),
            'lo_user' => auth()->user()->username,
            'lo_ip' => \Request::ip(),
            'lo_module' => 'SCHEDULE',
            'lo_message' => 'UPDATE ' .  $schedule['sc_doctor_name'] . ' TANGGAL ' . Carbon::create($date)->isoFormat('DD MMMM YYYY')
        ]);
        return redirect()->route('schedules', $date)->with($type, $message);
    }
}
