<?php

namespace App\Livewire\Bpjs;

use App\Models\Appointment;
use App\Models\BpjsKesehatanAppointment;
use App\Models\Clinic;
use App\Models\NewAppointment;
use App\Models\Schedule;
use App\Models\ScheduleDate;
use App\Services\APIHeaderGenerator;
use App\Services\AppointmentDate;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Illuminate\Support\Str;
use Livewire\Component;

class BpjsAppointment extends Component
{
    public $patientData, $bpjsData;
    public $appointmentDates, $clinics, $doctors;
    public $phone_number, $selectedDate, $selectedClinic, $selectedDoctor, $no_skdp;

    protected APIHeaderGenerator $apiHeaderGenerator;
    protected AppointmentDate $appointmentDate;

    public function boot(APIHeaderGenerator $apiHeaderGenerator, AppointmentDate $appointmentDate): void
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->apiHeaderGenerator = $apiHeaderGenerator;
        $this->appointmentDate = $appointmentDate;
    }

    public function render()
    {
        return view('livewire.bpjs.bpjs-appointment')->layout('frontend.layout');
    }

    public function mount($patientData, $bpjsData): void
    {
        $this->bpjsData = $bpjsData;
        $this->patientData = $patientData;
        $this->appointmentDates = ScheduleDate::where('sd_date', $this->appointmentDate->selectAppointmentDate())->get();
        //$this->appointmentDates = ScheduleDate::where('sd_date', '>=', Carbon::today()->addDay()->format('Y-m-d'))->where('sd_date', '<=', Carbon::today()->addWeek()->format('Y-m-d'))->get();
        //$this->appointmentDates = ScheduleDate::where('sd_date', Carbon::today()->addDay()->format('Y-m-d'))->get();
        $this->clinics = Clinic::where('cl_active', true)
            ->where('cl_bpjs', true)
            ->where('cl_code_bpjs', $this->bpjsData['poliRujukan']['kode'])
            ->orderBy('cl_order', 'ASC')
            ->get();
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
                ->where('sc_bpjs', true)
                ->where('sc_counter_online_bpjs', '>=','sc_online_bpjs')
                ->get();
        } else {
            $this->doctors = null;
        }
    }

    public function createAppointment()
    {
        $responses = [];
        $link = env('API_KEY', 'rsck');
        $headers = $this->apiHeaderGenerator->generateApiHeader();

        $sdDate = ScheduleDate::where('sd_ucode', $this->selectedDate)->first()->sd_date;
        $dateData = Carbon::createFromFormat('Y-m-d', ScheduleDate::where('sd_ucode', $this->selectedDate)->first()->sd_date)->format('Ymd');
        $doctorData = Schedule::where('sc_ucode', $this->selectedDoctor)->first();

        if($doctorData['sc_available'] == 0) {
            return redirect()->route('bpjs')->with('error', 'Jadwal [' . $doctorData['sc_clinic_name'] . ' -- ' . $doctorData['sc_doctor_name'] . '] Tidak Tersedia');
        }

        if($doctorData['sc_counter_online_bpjs'] >= $doctorData['sc_online_bpjs']) {
            return redirect()->route('bpjs')->with('error', 'Kuota Pasien BPJS [' . $doctorData['sc_clinic_name'] . ' -- ' . $doctorData['sc_doctor_name'] . '] Sudah Terpenuhi');
        }

        if(BpjsKesehatanAppointment::whereHas('appointment.schedule.scheduleDate', function ($query) use ($sdDate) {
                $query->where('sd_date', $sdDate);
            })->where('bap_norm', $this->patientData['MedicalNo'])->exists()
        ) {
            return redirect()->route('bpjs')->with('error', 'Anda Sudah Terdaftar Sebagai Pasien BPJS Untuk Tanggal ' . Carbon::createFromFormat('Ymd', $dateData)->isoFormat('DD MMMM YYYY'));
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
            $response = $client->post("https://mobilejkn.rscahyakawaluyan.com/medinfrasAPI/{$link}/api/v2/centerback/ADT_A05_01", [
                'headers' => $headers,
                'form_params' => $requestData
            ]);

            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);
                if($data['Status'] == 'SUCCESS (000)') {
                    $dataField = json_decode($data['Data'], true);
                    do {
                        $token = Str::random(6);
                        $tokenCheck = \App\Models\Appointment::where('sc_id', $doctorData['id'])->where('ap_token', $token)->exists();
                    } while ($tokenCheck);
                    $appointmentData = \App\Models\Appointment::create([
                        'sc_id' => $doctorData['id'],
                        'ap_ucode' => $dataField['AppointmentID'],
                        'ap_no' => $dataField['AppointmentNo'],
                        'ap_token' => strtoupper($token),
                        'ap_queue' => $dataField['QueueNo'],
                        'ap_type' => 'BPJS',
                        'ap_registration_time' => Carbon::createFromFormat('H:i', $dataField['StartTime'])->subMinutes(30),
                        'ap_appointment_time' => Carbon::createFromFormat('H:i', $dataField['StartTime']),
                    ]);
                    BpjsKesehatanAppointment::create([
                        'ap_id' => $appointmentData['id'],
                        'bap_norm' => $dataField['MedicalNo'],
                        'bap_name' => $dataField['PatientName'],
                        'bap_birthday' => $this->patientData['DateOfBirth'],
                        'bap_phone' => $this->phone_number,
                        'bap_bpjs' => $this->bpjsData['peserta']['noKartu'],
                        'bap_ppk1' => $this->bpjsData['noKunjungan'],
                        'bap_skdp' => $this->no_skdp
                    ]);
                    Schedule::where('id', $doctorData['id'])->increment('sc_counter_max_bpjs');
                    Schedule::where('id', $doctorData['id'])->increment('sc_counter_online_bpjs');
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
