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
                if ($patientType === 'fisio_umum_pagi') {
                    return 7;
                } elseif ($patientType === 'fisio_umum_sore') {
                    return 3;
                } elseif ($patientType === 'fisio_bpjs_pagi') {
                    return 55;
                } elseif ($patientType === 'fisio_bpjs_sore') {
                    return 10;
                }
                break;
            case 6:
                if ($patientType === 'fisio_umum_pagi') {
                    return 7;
                } elseif ($patientType === 'fisio_umum_sore') {
                    return 3;
                } elseif ($patientType === 'fisio_bpjs_pagi') {
                    return 32;
                } elseif ($patientType === 'fisio_bpjs_sore') {
                    return 8;
                }
                break;
            default:
                return 0;
        }
    }
}
