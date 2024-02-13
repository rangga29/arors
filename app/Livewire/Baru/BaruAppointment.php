<?php

namespace App\Livewire\Baru;

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
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Livewire\Component;

class BaruAppointment extends Component
{
    public $patientData;
    public $appointmentDates, $clinics, $doctors;
    public $address, $phone_number, $email, $selectedDate, $selectedClinic, $selectedDoctor;
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
        View::share('type', 'baru');
        return view('livewire.baru.baru-appointment')->layout('frontend.layout');
    }

    public function mount($patientData): void
    {
        $this->patientData = $patientData;
        $this->appointmentDates = ScheduleDate::where('sd_date', $this->appointmentDate->selectAppointmentDate())->get();
        //$this->appointmentDates = ScheduleDate::where('sd_date', '>=', Carbon::today()->addDay()->format('Y-m-d'))->where('sd_date', '<=', Carbon::today()->addWeek()->format('Y-m-d'))->get();
        //$this->appointmentDates = ScheduleDate::where('sd_date', Carbon::today()->format('Y-m-d'))->get();
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
                ->where('sc_umum', true)
                ->where('sc_counter_online_umum', '>=','sc_online_umum')
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

        $dateData = Carbon::createFromFormat('Y-m-d', ScheduleDate::where('sd_ucode', $this->selectedDate)->first()->sd_date)->format('Ymd');
        $doctorData = Schedule::where('sc_ucode', $this->selectedDoctor)->first();

        if($doctorData['sc_available'] == 0) {
            return redirect()->route('baru')->with('error', 'Jadwal [' . $doctorData['sc_clinic_name'] . ' -- ' . $doctorData['sc_doctor_name'] . '] Tidak Tersedia');
        }

        if($doctorData['sc_counter_online_umum'] >= $doctorData['sc_online_umum']) {
            return redirect()->route('baru')->with('error', 'Kuota Pasien Umum [' . $doctorData['sc_clinic_name'] . ' -- ' . $doctorData['sc_doctor_name'] . '] Sudah Terpenuhi');
        }

        $requestData = [
            'AppointmentMethod' => '003',
            'HealthcareID' => '001',
            'DepartmentID' => 'OUTPATIENT',
            'ServiceUnitCode' => $doctorData['sc_clinic_code'],
            'ParamedicCode' => $doctorData['sc_doctor_code'],
            'VisitTypeCode' => 'VT01',
            'OperationalTimeCode' => $doctorData['sc_operational_time_code'],
            'StartDate' => $dateData,
            'Notes' => '',
            'IsPersonalPayer' => 1,
            'BusinessPartnerCode' => 'PERSONAL',
            'IsBPJS' => 0,
            'IsNewPatient' => 1,
            'UserID' => '197317247',
            'IdentityNoType' => 'X097^001',
            'IdentityCardNo' => $this->patientData['nik'],
            'PatientName' => $this->patientData['nama'],
            'DateOfBirth' => Carbon::createFromFormat('Y-m-d', $this->patientData['tglLahir'])->format('Ymd'),
            'Gender' => $this->patientData['sex'] == 'L' ? 'M' : 'F',
            'Address' => $this->address,
            'MobileNo' => $this->phone_number,
            'EmailAddress' => $this->email
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
                    $checkNewAppointmentDuplicate = NewAppointment::where('nap_ssn', $requestData['IdentityCardNo'])->get();
                    foreach ($checkNewAppointmentDuplicate as $checkData) {
                        $checkAppointmentDuplicate = \App\Models\Appointment::where('id', $checkData['ap_id'])->where('sc_id', $doctorData['id'])->exists();
                        if($checkAppointmentDuplicate) {
                            return redirect()->route('baru')->with('error', 'NIK Sudah Digunakan Untuk Pendaftaran Pasien Baru Di Dokter Yang Sama');
                        }
                    }

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
                        'ap_type' => 'BARU',
                        'ap_registration_time' => Carbon::createFromFormat('H:i', $dataField['StartTime'])->subMinutes(30),
                        'ap_appointment_time' => Carbon::createFromFormat('H:i', $dataField['StartTime']),
                    ]);
                    NewAppointment::create([
                        'ap_id' => $appointmentData['id'],
                        'nap_norm' => '00-00-00-00',
                        'nap_name' => $requestData['PatientName'],
                        'nap_birthday' => $requestData['DateOfBirth'],
                        'nap_phone' => $requestData['MobileNo'],
                        'nap_ssn' => $requestData['IdentityCardNo'],
                        'nap_gender' => $requestData['Gender'],
                        'nap_address' => $requestData['Address'],
                        'nap_email' => $requestData['EmailAddress']
                    ]);
                    Schedule::where('id', $doctorData['id'])->increment('sc_counter_max_umum');
                    Schedule::where('id', $doctorData['id'])->increment('sc_counter_online_umum');
                    return redirect()->route('baru.final', $dataField['AppointmentID'])->with('success', 'Registrasi Berhasil Dilakukan');
                } else {
                    return redirect()->route('baru')->with('error', $data['Status'] . ' - ' . $data['Remarks']);
                }
            } else {
                return back()->with('error', 'Request failed. Status code: ' . $response->getStatusCode());
            }
        } catch (RequestException $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
