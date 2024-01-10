<?php

namespace App\Livewire\Baru;

use App\Models\Clinic;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use App\Services\APIHeaderGenerator;
use Carbon\Carbon;
use Livewire\Component;

class BaruAppointment extends Component
{
    public $patientData;
    public $appointmentDates, $clinics, $doctors;
    public $address, $phone_number, $email, $selectedDate, $selectedClinic, $selectedDoctor;
    protected APIHeaderGenerator $apiHeaderGenerator;

    public function boot(APIHeaderGenerator $apiHeaderGenerator): void
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
    }

    public function render()
    {
        return view('livewire.baru.baru-appointment')->layout('frontend.layout');
    }

    public function mount($patientData): void
    {
        $this->patientData = $patientData;
        $this->appointmentDates = ScheduleDate::where('sd_date', '>=', Carbon::today()->addDay()->format('Y-m-d'))
            ->where('sd_date', '<=', Carbon::today()->addWeek()->format('Y-m-d'))->get();
        $this->clinics = Clinic::where('cl_active', true)->where('cl_umum', true)->orderBy('cl_order', 'ASC')->get();
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
                ->where('sc_clinic_code', Clinic::where('cl_ucode', $this->selectedClinic)->first()->cl_code)
                ->where('sc_available', true)
                ->where('sc_umum', true)->get();
        } else {
            $this->doctors = null;
        }
    }
}
