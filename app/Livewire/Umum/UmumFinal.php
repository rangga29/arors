<?php

namespace App\Livewire\Umum;

use App\Models\Schedule;
use App\Models\ScheduleDate;
use App\Models\UmumAppointment;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Carbon;
use Livewire\Component;

class UmumFinal extends Component
{
    public $code, $service, $patientData, $detailPatientData, $scheduleData, $scheduleDateData;

    public function render()
    {
        return view('livewire.umum.umum-final')->layout('frontend.layout');
    }

    public function mount($code): void
    {
        $this->code = $code;
        $this->patientData = \App\Models\Appointment::where('ap_ucode', $code)->first();
        $this->detailPatientData = UmumAppointment::where('ap_id', $this->patientData['id'])->first();
        $this->scheduleData = Schedule::where('id', $this->patientData['sc_id'])->first();
        $this->scheduleDateData = ScheduleDate::where('id', $this->scheduleData['sd_id'])->first();

        $segments = explode('/', request()->url());
        $desiredSegment = $segments[3] ?? '';
        $this->service = $desiredSegment;
    }

    public function downloadPdf()
    {
        $fileName = Carbon::createFromFormat('Y-m-d', $this->scheduleDateData['sd_date'])->format('Ymd') . '_' . $this->detailPatientData['uap_norm'] . '_BuktiRegolUmumRSCK';
        $data = [
            'title' => $fileName,
            'patientData' => $this->patientData,
            'detailPatientData' => $this->detailPatientData,
            'scheduleData' => $this->scheduleData,
            'scheduleDateData' => $this->scheduleDateData,
            'service' => $this->service
        ];

        $pdf = PDF::loadView('frontend.umum-print', $data);
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, $fileName . '.pdf');
    }
}
