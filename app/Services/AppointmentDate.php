<?php

namespace App\Services;

use App\Models\ScheduleDate;
use Carbon\Carbon;

class AppointmentDate {
    public function selectAppointmentDate()
    {
        $counter = 1;
        $today = Carbon::today();
        $dateData = ScheduleDate::all();

        do {
            foreach ($dateData as $date) {
                if ($date->sd_date == $today->copy()->addDay($counter)->format('Y-m-d') && !$date->sd_is_holiday) {
                    return $date->sd_date;
                }
            }
            $counter++;
        } while($counter <= $dateData->count());
        return null;
    }
}
