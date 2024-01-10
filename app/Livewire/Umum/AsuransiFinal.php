<?php

namespace App\Livewire\Umum;

use App\Models\AsuransiAppointment;
use App\Models\BusinessPartner;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Carbon;
use Livewire\Component;

class AsuransiFinal extends Component
{
    public $code, $service, $patientData, $detailPatientData, $scheduleData, $scheduleDateData, $businessPartnerData;

    public function render()
    {
        return view('livewire.umum.asuransi-final')->layout('frontend.layout');
    }

    public function mount($code): void
    {
        $this->code = $code;
        $this->patientData = \App\Models\Appointment::where('ap_ucode', $code)->first();
        $this->detailPatientData = AsuransiAppointment::where('ap_id', $this->patientData['id'])->first();
        $this->scheduleData = Schedule::where('id', $this->patientData['sc_id'])->first();
        $this->scheduleDateData = ScheduleDate::where('id', $this->scheduleData['sd_id'])->first();
        $this->businessPartnerData = BusinessPartner::where('id', $this->detailPatientData['bp_id'])->first();

        $segments = explode('/', request()->url());
        $desiredSegment = $segments[3] ?? '';
        $this->service = $desiredSegment;
    }

    public function downloadPdf()
    {
        $fileName = Carbon::createFromFormat('Y-m-d', $this->scheduleDateData['sd_date'])->format('Ymd') . '_' . $this->patientData['aap_norm'] . '_BuktiRegolAsuransiRSCK';
        $data = [
            'title' => $fileName,
            'patientData' => $this->patientData,
            'detailPatientData' => $this->detailPatientData,
            'scheduleData' => $this->scheduleData,
            'scheduleDateData' => $this->scheduleDateData,
            'businessPartnerData' => $this->businessPartnerData,
            'service' => $this->service
        ];

        $pdf = PDF::loadView('frontend.asuransi-print', $data);
        return response()->streamDownload(function () use ($pdf) {
            echo $pdf->output();
        }, $fileName . '.pdf');
    }
}
