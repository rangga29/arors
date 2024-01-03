<?php

namespace App\Services;

class FisioMaxAppointment {
    public function getMaxPatients($dayOfWeek, $patientType)
    {
        switch ($dayOfWeek) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                if ($patientType === 'fisio_umum') {
                    return 10;
                } elseif ($patientType === 'fisio_bpjs') {
                    return 50;
                }
                break;
            case 6:
                if ($patientType === 'fisio_umum') {
                    return 7;
                } elseif ($patientType === 'fisio_bpjs') {
                    return 28;
                }
                break;
            default:
                return 0;
        }
    }
}
