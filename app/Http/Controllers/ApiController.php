<?php

namespace App\Http\Controllers;

use App\Models\ScheduleDate;
use function response;

class ApiController extends Controller
{
    public function getAppointmentByToken($date, $token)
    {
        $appointment = ScheduleDate::where('sd_date', $date)
            ->with([
                'schedules' => function ($query) use ($token) {
                    $query->whereHas('appointments', function ($subQuery) use ($token) {
                        $subQuery->where('ap_token', $token);
                    })->with([
                        'appointments' => function ($subQuery) use ($token) {
                            $subQuery->where('ap_token', $token);
                        },
                        'appointments.umumAppointment',
                        'appointments.asuransiAppointment',
                        'appointments.bpjsKesehatanAppointment',
                        'appointments.newAppointment',
                    ]);
                },
            ])
            ->first()->toArray();

        $umumAppointment = data_get($appointment, 'schedules.0.appointments.0.umum_appointment');
        $asuransiAppointment = data_get($appointment, 'schedules.0.appointments.0.asuransi_appointment');
        $bpjsKesehatanAppointment = data_get($appointment, 'schedules.0.appointments.0.bpjs_kesehatan_appointment');
        $newAppointment = data_get($appointment, 'schedules.0.appointments.0.new_appointment');

        if ($umumAppointment !== null) {
            return response()->json([
                'type' => 'UMUM',
                'appointment' => $appointment
            ]);
        } elseif ($asuransiAppointment !== null) {
            return response()->json([
                'type' => 'ASURANSI',
                'appointment' => ''
            ]);
        } elseif ($bpjsKesehatanAppointment !== null) {
            return response()->json([
                'type' => 'BPJS',
                'appointment' => ''
            ]);
        } elseif ($newAppointment !== null) {
            return response()->json([
                'type' => 'BARU',
                'appointment' => ''
            ]);
        } else {
            return response()->json([
                'type' => 'TIDAK ADA',
                'appointment' => ''
            ]);
        }
    }
}
