<?php

namespace App\Livewire\Fisio;

use App\Models\FisioterapiAppointment;
use App\Models\ScheduleDate;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;
use Livewire\Component;

class FisioFinal extends Component
{
    public $code, $patientData, $scheduleDateData;

    public function render()
    {
        View::share('type', 'fisioterapi');
        return view('livewire.fisio.fisio-final')->layout('frontend.layout');
    }

    public function mount($code): void
    {
        $this->code = $code;
        $this->patientData = FisioterapiAppointment::where('fap_ucode', $code)->first();
        $this->scheduleDateData = ScheduleDate::where('id', $this->patientData['sd_id'])->first();
    }

    public function downloadPdf()
    {
        $fileName = Carbon::createFromFormat('Y-m-d', $this->scheduleDateData['sd_date'])->format('Ymd') . '_' . $this->patientData['fap_norm'] . '_BuktiRegolFisioRSCK';
        $data = [
            'title' => $fileName,
            'patientData' => $this->patientData,
            'scheduleDateData' => $this->scheduleDateData
        ];

        $pdf = PDF::loadView('frontend.fisio-print', $data);
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, $fileName . '.pdf');
    }
}
