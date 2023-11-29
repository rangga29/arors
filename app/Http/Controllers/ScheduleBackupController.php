<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\ScheduleBackup;
use App\Models\ScheduleDate;
use App\Models\ScheduleDateBackup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function redirect;

class ScheduleBackupController extends Controller
{
    public function index()
    {
        return view('backend.schedules.view-date-backup', [
            'schedule_dates' => ScheduleDateBackup::orderBy('sdb_date', 'DESC')->get(),
            'schedule_date_first' => ScheduleDateBackup::orderBy('sdb_date', 'ASC')->first()->sdb_date,
            'schedule_date_last' => ScheduleDateBackup::orderBy('sdb_date', 'DESC')->first()->sdb_date
        ]);
    }

    public function view($date)
    {
        return view('backend.schedules.view-backup', [
            'date_original' => $date,
            'date' => Carbon::parse($date)->isoFormat('dddd, DD MMMM YYYY'),
            'schedule_date_first' => ScheduleDateBackup::orderBy('sdb_date', 'ASC')->first()->sdb_date,
            'schedule_date_last' => ScheduleDateBackup::orderBy('sdb_date', 'DESC')->first()->sdb_date,
            'schedules' => ScheduleBackup::where('scb_date', $date)
                ->orderBy('scb_clinic_name')
                ->orderBy('scb_doctor_name')
                ->get()
        ]);
    }

    public function showRedirect(Request $request)
    {
        return redirect()->route('schedules.backup', $request['schedule-date']);
    }
}
