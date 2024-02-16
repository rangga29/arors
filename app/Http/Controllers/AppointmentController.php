<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\FisioterapiAppointment;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function array_merge;
use function response;
use function strcmp;
use function usort;

class AppointmentController extends Controller
{
    public function index($date)
    {
        $this->authorize('view', Appointment::class);

        $date_original = $date;
        $date = Carbon::parse($date)->isoFormat('dddd, DD MMMM YYYY');
        $schedule_date_first = ScheduleDate::orderBy('sd_date', 'ASC')->first()->sd_date;
        $schedule_date_last = ScheduleDate::orderBy('sd_date', 'DESC')->first()->sd_date;

        $appointments = ScheduleDate::where('sd_date', $date_original)
            ->with('schedules.appointments.umumAppointment', 'schedules.appointments.asuransiAppointment', 'schedules.appointments.bpjsKesehatanAppointment', 'schedules.appointments.newAppointment')
            ->get();

        $combinedAppointments = [];

        foreach ($appointments as $appointment) {
            foreach ($appointment->schedules as $schedule) {
                foreach ($schedule->appointments as $appointmentDetail) {
                    $combinedAppointment = [
                        'clinic' => $schedule->sc_clinic_name,
                        'doctor' => $schedule->sc_doctor_name,
                        'queue' => $appointmentDetail->ap_queue,
                        'token' => $appointmentDetail->ap_token,
                        'norm' => null,
                        'name' => null,
                        'birthday' => null,
                        'phone' => null,
                        'type' => $appointmentDetail->ap_type,
                        'registration_time' => $appointmentDetail->ap_registration_time,
                        'appointment_time' => $appointmentDetail->ap_appointment_time
                    ];

                    if ($appointmentDetail->umumAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->umumAppointment->uap_norm,
                            'name' => $appointmentDetail->umumAppointment->uap_name,
                            'birthday' => $appointmentDetail->umumAppointment->uap_birthday,
                            'phone' => $appointmentDetail->umumAppointment->uap_phone,
                        ]);
                    }

                    if ($appointmentDetail->asuransiAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->asuransiAppointment->aap_norm,
                            'name' => $appointmentDetail->asuransiAppointment->aap_name,
                            'birthday' => $appointmentDetail->asuransiAppointment->aap_birthday,
                            'phone' => $appointmentDetail->asuransiAppointment->aap_phone,
                        ]);
                    }

                    if ($appointmentDetail->bpjsKesehatanAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->bpjsKesehatanAppointment->bap_norm,
                            'name' => $appointmentDetail->bpjsKesehatanAppointment->bap_name,
                            'birthday' => $appointmentDetail->bpjsKesehatanAppointment->bap_birthday,
                            'phone' => $appointmentDetail->bpjsKesehatanAppointment->bap_phone,
                        ]);
                    }

                    if ($appointmentDetail->newAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->newAppointment->nap_norm,
                            'name' => $appointmentDetail->newAppointment->nap_name,
                            'birthday' => $appointmentDetail->newAppointment->nap_birthday,
                            'phone' => $appointmentDetail->newAppointment->nap_phone,
                            // Add other fields as needed
                        ]);
                    }

                    $combinedAppointments[] = $combinedAppointment;
                }
            }
        }

        usort($combinedAppointments, function ($a, $b) {
            $clinicComparison = strcmp($a['clinic'], $b['clinic']);
            if ($clinicComparison !== 0) {
                return $clinicComparison;
            }

            $doctorComparison = strcmp($a['doctor'], $b['doctor']);
            if ($doctorComparison !== 0) {
                return $doctorComparison;
            }

            return $a['queue'] - $b['queue'];
        });

        return view('backend.appointment.view-date', [
            'date_original' => $date_original,
            'date' => $date,
            'schedule_date_first' => $schedule_date_first,
            'schedule_date_last' => $schedule_date_last,
            'appointmentData' => $combinedAppointments
        ]);
    }

    public function redirectDate(Request $request)
    {
        $this->authorize('view', Appointment::class);

        return redirect()->route('appointments', $request['appointment-date']);
    }

    public function indexDoctor($date, $doctor)
    {
        $this->authorize('view', Appointment::class);

        $date_original = $date;
        $date = Carbon::parse($date)->isoFormat('dddd, DD MMMM YYYY');
        $schedule_date_first = ScheduleDate::orderBy('sd_date', 'ASC')->first()->sd_date;
        $schedule_date_last = ScheduleDate::orderBy('sd_date', 'DESC')->first()->sd_date;

        $appointments = ScheduleDate::where('sd_date', $date_original)
            ->with([
                'schedules' => function ($query) use ($doctor) {
                    $query->where('sc_doctor_code', $doctor);
                },
                'schedules.appointments.umumAppointment',
                'schedules.appointments.asuransiAppointment',
                'schedules.appointments.bpjsKesehatanAppointment',
                'schedules.appointments.newAppointment',
            ])
            ->get();

        $combinedAppointments = [];

        foreach ($appointments as $appointment) {
            foreach ($appointment->schedules as $schedule) {
                foreach ($schedule->appointments as $appointmentDetail) {
                    $combinedAppointment = [
                        'clinic' => $schedule->sc_clinic_name,
                        'doctor' => $schedule->sc_doctor_name,
                        'queue' => $appointmentDetail->ap_queue,
                        'token' => $appointmentDetail->ap_token,
                        'norm' => null,
                        'name' => null,
                        'birthday' => null,
                        'phone' => null,
                        'type' => $appointmentDetail->ap_type,
                        'registration_time' => $appointmentDetail->ap_registration_time,
                        'appointment_time' => $appointmentDetail->ap_appointment_time
                    ];

                    if ($appointmentDetail->umumAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->umumAppointment->uap_norm,
                            'name' => $appointmentDetail->umumAppointment->uap_name,
                            'birthday' => $appointmentDetail->umumAppointment->uap_birthday,
                            'phone' => $appointmentDetail->umumAppointment->uap_phone,
                        ]);
                    }

                    if ($appointmentDetail->asuransiAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->asuransiAppointment->aap_norm,
                            'name' => $appointmentDetail->asuransiAppointment->aap_name,
                            'birthday' => $appointmentDetail->asuransiAppointment->aap_birthday,
                            'phone' => $appointmentDetail->asuransiAppointment->aap_phone,
                        ]);
                    }

                    if ($appointmentDetail->bpjsKesehatanAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->bpjsKesehatanAppointment->bap_norm,
                            'name' => $appointmentDetail->bpjsKesehatanAppointment->bap_name,
                            'birthday' => $appointmentDetail->bpjsKesehatanAppointment->bap_birthday,
                            'phone' => $appointmentDetail->bpjsKesehatanAppointment->bap_phone,
                        ]);
                    }

                    if ($appointmentDetail->newAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->newAppointment->nap_norm,
                            'name' => $appointmentDetail->newAppointment->nap_name,
                            'birthday' => $appointmentDetail->newAppointment->nap_birthday,
                            'phone' => $appointmentDetail->newAppointment->nap_phone,
                        ]);
                    }

                    $combinedAppointments[] = $combinedAppointment;
                }
            }
        }

        usort($combinedAppointments, function ($a, $b) {
            $clinicComparison = strcmp($a['clinic'], $b['clinic']);
            if ($clinicComparison !== 0) {
                return $clinicComparison;
            }

            $doctorComparison = strcmp($a['doctor'], $b['doctor']);
            if ($doctorComparison !== 0) {
                return $doctorComparison;
            }

            return $a['queue'] - $b['queue'];
        });

        return view('backend.appointment.view-date-doctor', [
            'date_original' => $date_original,
            'date' => $date,
            'doctor_code' => $doctor,
            'schedule_date_first' => $schedule_date_first,
            'schedule_date_last' => $schedule_date_last,
            'appointmentData' => $combinedAppointments
        ]);
    }

    public function redirectDateDoctor(Request $request)
    {
        $this->authorize('view', Appointment::class);

        return redirect()->route('appointments.doctor', [$request['appointment-date'], $request['doctor-code']]);
    }

    public function indexFisio($date)
    {
        $this->authorize('view', Appointment::class);

        $date_original = $date;
        $date = Carbon::parse($date)->isoFormat('dddd, DD MMMM YYYY');
        $schedule_date_first = ScheduleDate::orderBy('sd_date', 'ASC')->first()->sd_date;
        $schedule_date_last = ScheduleDate::orderBy('sd_date', 'DESC')->first()->sd_date;

        $appointments = FisioterapiAppointment::where('sd_id', (ScheduleDate::where('sd_date', $date_original)->first()->id))->orderBy('fap_queue')->get();

        return view('backend.appointment.view-fisio', [
            'date_original' => $date_original,
            'date' => $date,
            'schedule_date_first' => $schedule_date_first,
            'schedule_date_last' => $schedule_date_last,
            'appointmentData' => $appointments
        ]);
    }

    public function redirectFisio(Request $request)
    {
        $this->authorize('view', Appointment::class);

        return redirect()->route('appointments.fisioterapi', $request['appointment-date']);
    }

    public function printAppointment($date)
    {
        $fileName = Carbon::createFromFormat('Y-m-d', $date)->format('Ymd') . '_Appointment';

        $appointments = ScheduleDate::where('sd_date', $date)
            ->with('schedules.appointments.umumAppointment', 'schedules.appointments.asuransiAppointment', 'schedules.appointments.bpjsKesehatanAppointment', 'schedules.appointments.newAppointment')
            ->get();

        $combinedAppointments = [];

        foreach ($appointments as $appointment) {
            foreach ($appointment->schedules as $schedule) {
                foreach ($schedule->appointments as $appointmentDetail) {
                    $combinedAppointment = [
                        'clinic' => $schedule->sc_clinic_name,
                        'doctor' => $schedule->sc_doctor_name,
                        'queue' => $appointmentDetail->ap_queue,
                        'token' => $appointmentDetail->ap_token,
                        'norm' => null,
                        'name' => null,
                        'birthday' => null,
                        'phone' => null,
                        'type' => $appointmentDetail->ap_type,
                        'registration_time' => $appointmentDetail->ap_registration_time,
                        'appointment_time' => $appointmentDetail->ap_appointment_time
                    ];

                    if ($appointmentDetail->umumAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->umumAppointment->uap_norm,
                            'name' => $appointmentDetail->umumAppointment->uap_name,
                            'birthday' => $appointmentDetail->umumAppointment->uap_birthday,
                            'phone' => $appointmentDetail->umumAppointment->uap_phone,
                        ]);
                    }

                    if ($appointmentDetail->asuransiAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->asuransiAppointment->aap_norm,
                            'name' => $appointmentDetail->asuransiAppointment->aap_name,
                            'birthday' => $appointmentDetail->asuransiAppointment->aap_birthday,
                            'phone' => $appointmentDetail->asuransiAppointment->aap_phone,
                        ]);
                    }

                    if ($appointmentDetail->bpjsKesehatanAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->bpjsKesehatanAppointment->bap_norm,
                            'name' => $appointmentDetail->bpjsKesehatanAppointment->bap_name,
                            'birthday' => $appointmentDetail->bpjsKesehatanAppointment->bap_birthday,
                            'phone' => $appointmentDetail->bpjsKesehatanAppointment->bap_phone,
                        ]);
                    }

                    if ($appointmentDetail->newAppointment) {
                        $combinedAppointment = array_merge($combinedAppointment, [
                            'norm' => $appointmentDetail->newAppointment->nap_norm,
                            'name' => $appointmentDetail->newAppointment->nap_name,
                            'birthday' => $appointmentDetail->newAppointment->nap_birthday,
                            'phone' => $appointmentDetail->newAppointment->nap_phone,
                            // Add other fields as needed
                        ]);
                    }

                    $combinedAppointments[] = $combinedAppointment;
                }
            }
        }

        usort($combinedAppointments, function ($a, $b) {
            $clinicComparison = strcmp($a['clinic'], $b['clinic']);
            if ($clinicComparison !== 0) {
                return $clinicComparison;
            }

            $doctorComparison = strcmp($a['doctor'], $b['doctor']);
            if ($doctorComparison !== 0) {
                return $doctorComparison;
            }

            return $a['queue'] - $b['queue'];
        });

        $fisioAppointments = FisioterapiAppointment::where('sd_id', (ScheduleDate::where('sd_date', $date)->first()->id))->orderBy('fap_type')->orderBy('fap_queue')->get();

        $data = [
            'title' => $fileName,
            'date' => $date,
            'appointmentData' => $combinedAppointments,
            'fisioData' => $fisioAppointments
        ];

        $pdf = PDF::loadView('backend.appointment.print', $data)->setPaper('a4', 'portrait');
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, $fileName . '.pdf');
    }
}
