<?php

namespace App\Livewire\Bpjs;

use App\Models\BpjsKesehatanAppointment;
use App\Models\Clinic;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use App\Services\APIHeaderGenerator;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Illuminate\Support\Str;
use Livewire\Component;
use function dd;
use function redirect;

class BpjsAppointment extends Component
{
    public $patientData, $bpjsData;
    public $appointmentDates, $clinics, $doctors;
    public $phone_number, $selectedDate, $selectedClinic, $selectedDoctor, $no_skdp;

    protected APIHeaderGenerator $apiHeaderGenerator;

    public function boot(APIHeaderGenerator $apiHeaderGenerator): void
    {
        $this->apiHeaderGenerator = $apiHeaderGenerator;
    }

    public function render()
    {
        return view('livewire.bpjs.bpjs-appointment')->layout('frontend.layout');
    }

    public function mount($patientData): void
    {
        $this->patientData = $patientData;
        $this->appointmentDates = ScheduleDate::where('sd_date', '>=', Carbon::today()->addDay()->format('Y-m-d'))
            ->where('sd_date', '<=', Carbon::today()->addWeek()->format('Y-m-d'))->get();
        $this->clinics = Clinic::where('cl_active', true)->where('cl_bpjs', true)->orderBy('cl_order', 'ASC')->get();
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
                ->where('sc_bpjs', true)->get();
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
            'BusinessPartnerCode' => 'BP00001',
            'ContractNo' => '114/HP-PKS-RSCK/XII/2021',
            'IsBPJS' => 1,
            'IsNewPatient' => 0,
            'UserID' => '197317247'
        ];

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
                        $tokenCheck = BpjsKesehatanAppointment::where('bap_token', $token)->exists();
                    } while ($tokenCheck);
                    BpjsKesehatanAppointment::create([
                        'sc_id' => $doctorData['id'],
                        'bap_ucode' => $dataField['AppointmentID'],
                        'bap_no' => $dataField['AppointmentNo'],
                        'bap_token' => strtoupper($token),
                        'bap_queue' => $dataField['QueueNo'],
                        'bap_registration_time' => Carbon::createFromFormat('H:i', $dataField['StartTime'])->subMinutes(30),
                        'bap_appointment_time' => Carbon::createFromFormat('H:i', $dataField['StartTime']),
                        'bap_norm' => $dataField['MedicalNo'],
                        'bap_name' => $dataField['PatientName'],
                        'bap_birthday' => $this->patientData['DateOfBirth'],
                        'bap_phone' => $this->phone_number,
                        'bap_bpjs' => $this->bpjsData['peserta']['noKartu'],
                        'bap_ppk1' => $this->bpjsData['noKunjungan'],
                        'bap_skdp' => $this->no_skdp
                    ]);

                    return redirect()->route('bpjs.final', $dataField['AppointmentID'])->with('success', 'Registrasi Berhasil Dilakukan');
                } else {
                    return redirect()->route('bpjs')->with('error', $data['Status'] . ' - ' . $data['Remarks']);
                }
            } else {
                return back()->with('error', 'Request failed. Status code: ' . $response->getStatusCode());
            }
        } catch (RequestException $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
