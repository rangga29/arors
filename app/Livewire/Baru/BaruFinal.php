<?php

namespace App\Livewire\Baru;

use App\Models\BpjsKesehatanAppointment;
use App\Models\NewAppointment;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class BaruFinal extends Component
{
    public $code, $patientData, $detailPatientData, $scheduleData, $scheduleDateData;

    public function render()
    {
        View::share('type', 'baru');
        return view('livewire.baru.baru-final')->layout('frontend.layout');
    }

    public function mount($code): void
    {
        $this->code = $code;
        $this->patientData = \App\Models\Appointment::where('ap_ucode', $code)->first();
        $this->detailPatientData = NewAppointment::where('ap_id', $this->patientData['id'])->first();
        $this->scheduleData = Schedule::where('id', $this->patientData['sc_id'])->first();
        $this->scheduleDateData = ScheduleDate::where('id', $this->scheduleData['sd_id'])->first();
    }

    public function downloadPdf()
    {
        $fileName = Carbon::createFromFormat('Y-m-d', $this->scheduleDateData['sd_date'])->format('Ymd') . '_' . $this->detailPatientData['nap_ssn'] . '_BuktiRegolPasienBaruRSCK';
        $data = [
            'title' => $fileName,
            'patientData' => $this->patientData,
            'detailPatientData' => $this->detailPatientData,
            'scheduleData' => $this->scheduleData,
            'scheduleDateData' => $this->scheduleDateData
        ];

        $pdf = PDF::loadView('frontend.baru-print', $data);
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, $fileName . '.pdf');
    }
}
