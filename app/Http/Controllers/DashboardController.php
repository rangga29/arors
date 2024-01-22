<?php

namespace App\Http\Controllers;

use App\Models\AsuransiAppointment;
use App\Models\BpjsKesehatanAppointment;
use App\Models\FisioterapiAppointment;
use App\Models\NewAppointment;
use App\Models\UmumAppointment;
use App\Services\AppointmentDate;
use Carbon\Carbon;

class DashboardController extends Controller
{
    protected AppointmentDate $appointmentDate;

    public function __construct(AppointmentDate $appointmentDate)
    {
        $this->appointmentDate = $appointmentDate;
    }

    public function index()
    {
        $dateSelected = $this->appointmentDate->selectAppointmentDate();

        $totalUmumAppointments = UmumAppointment::whereHas('appointment.schedule.scheduleDate', function ($query) use ($dateSelected) {
            $query->whereDate('sd_date', $dateSelected);
        })->count();

        $totalAsuransiAppointments = AsuransiAppointment::whereHas('appointment.schedule.scheduleDate', function ($query) use ($dateSelected) {
            $query->whereDate('sd_date', $dateSelected);
        })->count();

        $totalFisioterapiAppointments = FisioterapiAppointment::whereHas('scheduleDate', function ($query) use ($dateSelected) {
            $query->whereDate('sd_date', $dateSelected);
        })->count();

        $totalBPJSKesehatanAppointments = BPJSKesehatanAppointment::whereHas('appointment.schedule.scheduleDate', function ($query) use ($dateSelected) {
            $query->whereDate('sd_date', $dateSelected);
        })->count();

        $totalNewAppointments = NewAppointment::whereHas('appointment.schedule.scheduleDate', function ($query) use ($dateSelected) {
            $query->whereDate('sd_date', $dateSelected);
        })->count();

        // Calculate the total appointments for tomorrow
        $totalAppointmentsTomorrow = $totalUmumAppointments + $totalAsuransiAppointments + $totalFisioterapiAppointments + $totalBPJSKesehatanAppointments + $totalNewAppointments;

        return view('backend.dashboard', [
            'date' => $dateSelected,
            'totalAppointmentsTomorrow' => $totalAppointmentsTomorrow,
            'totalUmumAppointments' => $totalUmumAppointments,
            'totalAsuransiAppointments' => $totalAsuransiAppointments,
            'totalFisioterapiAppointments' => $totalFisioterapiAppointments,
            'totalBPJSKesehatanAppointments' => $totalBPJSKesehatanAppointments,
            'totalNewAppointments' => $totalNewAppointments,
        ]);
    }
}
