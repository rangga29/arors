<?php

namespace App\Livewire\Bpjs;

use App\Models\BpjsKesehatanAppointment;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Carbon;
use Livewire\Component;

class BpjsFinal extends Component
{
    public $code, $patientData, $scheduleData, $scheduleDateData;

    public function render()
    {
        return view('livewire.bpjs.bpjs-final')->layout('frontend.layout');
    }

    public function mount($code): void
    {
        $this->code = $code;
        $this->patientData = BpjsKesehatanAppointment::where('bap_ucode', $code)->first();
        $this->scheduleData = Schedule::where('id', $this->patientData['sc_id'])->first();
        $this->scheduleDateData = ScheduleDate::where('id', $this->scheduleData['sd_id'])->first();
    }

    public function downloadPdf()
    {
        $fileName = Carbon::createFromFormat('Y-m-d', $this->scheduleDateData['sd_date'])->format('Ymd') . '_' . $this->patientData['bap_norm'] . '_BuktiRegolBPJSRSCK';
        $data = [
            'title' => $fileName,
            'patientData' => $this->patientData,
            'scheduleData' => $this->scheduleData,
            'scheduleDateData' => $this->scheduleDateData
        ];

        $pdf = PDF::loadView('frontend.bpjs-print', $data);
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, $fileName . '.pdf');
    }
}
