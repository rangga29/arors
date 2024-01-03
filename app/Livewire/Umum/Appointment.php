<?php

namespace App\Livewire\Umum;

use App\Models\AsuransiAppointment;
use App\Models\BusinessPartner;
use App\Models\Clinic;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use App\Models\UmumAppointment;
use App\Services\APIHeaderGenerator;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Illuminate\Support\Str;
use Livewire\Component;

class Appointment extends Component
{
    public $patientData, $serviceType;
    public $appointmentDates, $clinics, $doctors, $businessPartners;
    public $phone_number, $selectedDate, $selectedClinic, $selectedDoctor, $selectedBusinessPartner;

    protected APIHeaderGenerator $apiHeaderGenerator;

    public function boot(APIHeaderGenerator $apiHeaderGenerator): void
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
    }

    public function render()
    {
        return view('livewire.umum.appointment')->layout('frontend.layout');
    }

    public function mount($patientData, $serviceType): void
    {
        $this->patientData = $patientData;
        $this->serviceType = $serviceType;
        $this->appointmentDates = ScheduleDate::where('sd_date', '>=', Carbon::today()->addDay()->format('Y-m-d'))
            ->where('sd_date', '<=', Carbon::today()->addWeek()->format('Y-m-d'))->get();
        $this->clinics = Clinic::where('cl_active', true)->orderBy('cl_order', 'ASC')->get();
        $this->businessPartners = BusinessPartner::where('bp_active', true)->orderBy('bp_order', 'ASC')->get();
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
                ->where('sc_available', true)->get();
        } else {
            $this->doctors = null;
        }
    }

    public function createAppointment()
    {
        $responses = [];
        $headers = $this->apiHeaderGenerator->generateApiHeader();

        $dateData = Carbon::createFromFormat('Y-m-d', ScheduleDate::where('sd_ucode', $this->selectedDate)->first()->sd_date)->format('Ymd');
        $doctorData = Schedule::where('sc_ucode', $this->selectedDoctor)->first();

        if($doctorData['sc_available'] == 0) {
            return redirect()->route('umum')->with('error', 'Jadwal Dokter Tidak Tersedia.');
        }

        if($this->serviceType == 'umum') {
            $requestData = [
                'AppointmentMethod' => '003',
                'HealthcareID' => '001',
                'DepartmentID' => 'OUTPATIENT',
                'MedicalNo' => $this->patientData['MedicalNo'],
                'ServiceUnitCode' => $doctorData['sc_clinic_code'],
                'ParamedicCode' => $doctorData['sc_doctor_code'],
                'VisitTypeCode' => 'VT01',
                'OperationalTimeCode' => $doctorData['sc_operational_time_code'],
                'StartDate' => $dateData,
                'Notes' => '',
                'IsPersonalPayer' => 1,
                'BusinessPartnerCode' => 'PERSONAL',
                'IsBPJS' => 0,
                'IsNewPatient' => 0,
                'UserID' => '197317247'
            ];
        } else {
            $businessPartnerData = BusinessPartner::where('bp_ucode', $this->selectedBusinessPartner)->first();
            $requestData = [
                'AppointmentMethod' => '003',
                'HealthcareID' => '001',
                'DepartmentID' => 'OUTPATIENT',
                'MedicalNo' => $this->patientData['MedicalNo'],
                'ServiceUnitCode' => $doctorData['sc_clinic_code'],
                'ParamedicCode' => $doctorData['sc_doctor_code'],
                'VisitTypeCode' => 'VT01',
                'OperationalTimeCode' => $doctorData['sc_operational_time_code'],
                'StartDate' => $dateData,
                'Notes' => '',
                'IsPersonalPayer' => 0,
                'BusinessPartnerCode' => $businessPartnerData['bp_code'],
                'ContractNo' => $businessPartnerData['bp_contract'],
                'IsBPJS' => 0,
                'IsNewPatient' => 0,
                'UserID' => '197317247'
            ];
        }

        $handlerStack = HandlerStack::create();
        $handlerStack->push(Middleware::retry(function ($retry, $request, $response, $exception) {
            return $retry < 10 && $exception instanceof RequestException && $exception->getCode() === 28;
        }, function ($retry) {
            return 1000 * pow(2, $retry);
        }));

        try {
            $client = new Client(['handler' => $handlerStack, 'verify' => false]);
            $response = $client->post("https://mobilejkn.rscahyakawaluyan.com/medinfrasAPI/workshop/api/v2/centerback/ADT_A05_01", [
                'headers' => $headers,
                'form_params' => $requestData
            ]);

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);
                if($data['Status'] == 'SUCCESS (000)') {
                    $dataField = json_decode($data['Data'], true);
                    do {
                        $token = Str::random(6);
                        $tokenCheck = UmumAppointment::where('uap_token', $token)->exists();
                    } while ($tokenCheck);
                    if($this->serviceType == 'umum') {
                        UmumAppointment::create([
                            'sc_id' => $doctorData['id'],
                            'uap_ucode' => $dataField['AppointmentID'],
                            'uap_no' => $dataField['AppointmentNo'],
                            'uap_token' => strtoupper($token),
                            'uap_queue' => $dataField['QueueNo'],
                            'uap_registration_time' => Carbon::createFromFormat('H:i', $dataField['StartTime'])->subMinutes(30),
                            'uap_appointment_time' => Carbon::createFromFormat('H:i', $dataField['StartTime']),
                            'uap_norm' => $dataField['MedicalNo'],
                            'uap_name' => $dataField['PatientName'],
                            'uap_birthday' => $this->patientData['DateOfBirth'],
                            'uap_phone' => $this->phone_number,
                        ]);
                        return redirect()->route('umum.final', $dataField['AppointmentID'])->with('success', 'Registrasi Berhasil Dilakukan');
                    } else {
                        AsuransiAppointment::create([
                            'sc_id' => $doctorData['id'],
                            'bp_id' => $businessPartnerData['id'],
                            'aap_ucode' => $dataField['AppointmentID'],
                            'aap_no' => $dataField['AppointmentNo'],
                            'aap_token' => strtoupper($token),
                            'aap_queue' => $dataField['QueueNo'],
                            'aap_registration_time' => Carbon::createFromFormat('H:i', $dataField['StartTime'])->subMinutes(30),
                            'aap_appointment_time' => Carbon::createFromFormat('H:i', $dataField['StartTime']),
                            'aap_norm' => $dataField['MedicalNo'],
                            'aap_name' => $dataField['PatientName'],
                            'aap_birthday' => $this->patientData['DateOfBirth'],
                            'aap_phone' => $this->phone_number,
                        ]);
                        return redirect()->route('asuransi.final', $dataField['AppointmentID'])->with('success', 'Registrasi Berhasil Dilakukan');
                    }
                } else {
                    return redirect()->route('umum')->with('error', $data['Status'] . ' - ' . $data['Remarks']);
                }
            } else {
                session()->flash('error', 'Request failed. Status code: ' . $response->getStatusCode());
            }
        } catch (RequestException $e) {
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
