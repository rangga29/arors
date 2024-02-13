<?php

namespace App\Services;

use App\Models\ScheduleDate;
use function now;

class AppointmentOpen {
    public function selectAppointmentOpen(): bool
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentHour = now()->hour;
        $dateData = ScheduleDate::where('sd_date', now()->copy()->addDay()->format('Y-m-d'))->first();

        //return true;

        if ($currentHour >= 17 || $currentHour <= 6) {
            if ($dateData->sd_is_holiday) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}
