<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
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

}
