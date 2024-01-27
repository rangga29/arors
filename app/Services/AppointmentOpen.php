<?php

namespace App\Services;

class AppointmentOpen {
    public function selectAppointmentOpen(): bool
    {
        date_default_timezone_set('Asia/Jakarta');
        $currentHour = now()->hour;

        if ($currentHour >= 18 || $currentHour <= 7) {
            return false; // It's outside the allowed time range
        } else {
            return true; // It's within the allowed time range
        }
    }
}
