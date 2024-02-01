<?php

namespace App\Livewire\Cek;

use App\Models\AsuransiAppointment;
use App\Models\BpjsKesehatanAppointment;
use App\Models\FisioterapiAppointment;
use App\Models\NewAppointment;
use App\Models\ScheduleDate;
use App\Models\UmumAppointment;
use App\Services\AppointmentDate;
use App\Services\NormConverter;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;
use Livewire\Component;

class CekNorm extends Component
{
    public $norm, $birthday, $selectedDate, $isHaveData, $appointmentDates;
    public $isHaveAppointment, $umumData, $asuransiData, $fisioterapiData, $bpjsData, $newData;
    protected NormConverter $normConverter;
    protected AppointmentDate $appointmentDate;

    public function boot(NormConverter $normConverter, AppointmentDate $appointmentDate): void
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->normConverter = $normConverter;
        $this->appointmentDate = $appointmentDate;
    }

    public function render()
    {
        return view('livewire.cek.cek-norm', [
            'todayDate' => Carbon::today()->format('Y-m-d'),
            'appointmentDate' => $this->appointmentDate->selectAppointmentDate(),
        ])->layout('frontend.layout');
    }

    public function mount(): void
    {
        $this->appointmentDates = ScheduleDate::where('sd_date', $this->appointmentDate->selectAppointmentDate())
            ->orWhere('sd_date', Carbon::today()->format('Y-m-d'))
            ->get();
    }

    public function checkPatient()
    {
        $medicalNo = $this->normConverter->normConverter($this->norm);
        $date = $this->selectedDate;

        try {
            $birthdate = Carbon::createFromFormat('d/m/Y', $this->birthday)->format('Ymd');
        } catch (InvalidFormatException) {
            return back()->with('error', 'Format Tanggal Lahir Salah');
        }

        $umumAppointmentExists = UmumAppointment::with('appointment.schedule.scheduleDate')
            ->where('uap_norm', $medicalNo)
            ->whereDate('uap_birthday', $birthdate)
            ->whereHas('appointment.schedule.scheduleDate', function ($query) use ($date) {
                $query->where('sd_ucode', $date);
            })->get();

        $asuransiAppointmentExists = AsuransiAppointment::with('appointment.schedule.scheduleDate')
            ->where('aap_norm', $medicalNo)
            ->whereDate('aap_birthday', $birthdate)
            ->whereHas('appointment.schedule.scheduleDate', function ($query) use ($date) {
                $query->where('sd_ucode', $date);
            })->get();

        $fisioterapiAppointmentExists = FisioterapiAppointment::with('scheduleDate')
            ->where('fap_norm', $medicalNo)
            ->whereDate('fap_birthday', $birthdate)
            ->whereHas('scheduleDate', function ($query) use ($date) {
                $query->where('sd_ucode', $date);
            })->get();

        $bpjsAppointmentExists = BpjsKesehatanAppointment::with('appointment.schedule.scheduleDate')
            ->where('bap_norm', $medicalNo)
            ->whereDate('bap_birthday', $birthdate)
            ->whereHas('appointment.schedule.scheduleDate', function ($query) use ($date) {
                $query->where('sd_ucode', $date);
            })->get();

        if ($umumAppointmentExists->count() === 0 && $asuransiAppointmentExists->count() === 0 && $fisioterapiAppointmentExists->count() === 0 && $bpjsAppointmentExists->count() === 0) {
            return back()->with('error', 'Data Pendaftaran Tidak Ditemukan');
        } else {
            $this->isHaveAppointment = true;
            $this->umumData = $umumAppointmentExists;
            $this->asuransiData = $asuransiAppointmentExists;
            $this->bpjsData = $bpjsAppointmentExists;
            $this->fisioterapiData = $fisioterapiAppointmentExists;
        }
    }
}
