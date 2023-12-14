<?php

namespace App\Livewire;

use App\Models\Clinic;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use Carbon\Carbon;
use Livewire\Component;

class Umum extends Component
{
    public $patientData;
    public $appointmentDates, $clinics, $doctors;
    public $phone_number, $selectedDate, $selectedClinic, $selectedDoctor;

    public function render()
    {
        return view('livewire.umum')->layout('frontend.layout');
    }

    public function mount($patientData): void
    {
        $this->patientData = $patientData;
        $this->appointmentDates = ScheduleDate::where('sd_date', '>=', Carbon::today()->addDay()->format('Y-m-d'))
            ->where('sd_date', '<=', Carbon::today()->addWeek()->format('Y-m-d'))->get();
        $this->clinics = Clinic::where('cl_active', true)->orderBy('cl_order')->get();
    }

    public function updated($propertyName): void
    {
        if ($propertyName == 'selectedDate' || $propertyName == 'selectedClinic') {
            $this->updateDoctors();
        }
    }

    protected function updateDoctors(): void
    {
        if ($this->selectedDate && $this->selectedClinic) {
            $this->doctors = Schedule::where('sd_id', ScheduleDate::where('sd_ucode', $this->selectedDate)->first()->id)
                ->where('sc_clinic_code', Clinic::where('cl_ucode', $this->selectedClinic)->first()->cl_code)->get();
        } else {
            $this->doctors = null;
        }
    }

    public function createAppointment(): void
    {
        dd('masuk appointment');
    }
}
