<?php

namespace App\Services;

use App\Models\ScheduleDate;
use Carbon\Carbon;

class AppointmentDate {
    public function selectAppointmentDate()
    {
        $today = Carbon::today();
        $dateData = ScheduleDate::all();

        foreach ($dateData as $date) {
            if ($date->sd_date == $today->copy()->addDay()->format('Y-m-d') && !$date->sd_is_holiday) {
                return $date->sd_date;
            }
        }
        return null;
    }
}
