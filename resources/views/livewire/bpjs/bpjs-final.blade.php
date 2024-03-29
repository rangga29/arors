<main class="background">
    <div class="text-center">
        <a href="{{ route('home') }}">
            <img class="d-block mx-auto mb-4" src="{{ asset('images/logo_rsck_new_resize.png') }}" alt="" height="57">
        </a>
        @if($service = 'umum')
            <h2>REGISTRASI PASIEN BPJS</h2>
            <p class="lead fs-4 pb-2 fw-bolder border-bottom">BUKTI PENDAFTARAN</p>
        @endif
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NORM</strong></p>
                <p class="ms-2"><i class="ri-arrow-right-double-line"></i> {{ $detailPatientData['bap_norm'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NAMA PASIEN</strong></p>
                <p class="ms-2"><i class="ri-arrow-right-double-line"></i> {{ $detailPatientData['bap_name'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NO BPJS</strong></p>
                <p class="ms-2"><i class="ri-arrow-re-double-line"></i> {{ $detailPatientData['bap_bpjs'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NO RUJUKAN</strong></p>
                <p class="ms-2"><i class="ri-arrow-right-double-line"></i> {{ $detailPatientData['bap_ppk1'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>TANGGAL PENDAFTARAN</strong></p>
                <p class="ms-2 text-uppercase"><i class="ri-arrow-right-double-line"></i> {{ \Carbon\Carbon::createFromFormat('Y-m-d', $scheduleDateData['sd_date'])->isoFormat('dddd, DD MMMM YYYY') }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NAMA KLINIK</strong></p>
                <p class="ms-2 text-uppercase"><i class="ri-arrow-right-double-line"></i> {{ $scheduleData['sc_clinic_name'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NAMA DOKTER</strong></p>
                <p class="ms-2 text-uppercase"><i class="ri-arrow-right-double-line"></i> {{ $scheduleData['sc_doctor_name'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NO ANTRIAN</strong></p>
                <p class="ms-2 "><i class="ri-arrow-right-double-line"></i> {{ $patientData['ap_queue'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>KODE TOKEN</strong></p>
                <p class="ms-2 text-uppercase"><i class="ri-arrow-right-double-line"></i> {{ $patientData['ap_token'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>WAKTU PENDAFTARAN ULANG</strong></p>
                <p class="ms-2"><i class="ri-arrow-right-double-line"></i> {{ \Carbon\Carbon::createFromFormat('H:i:s', $patientData['ap_registration_time'])->format('H:i') }} WIB</p>
            </div>
        </div>
    </div>

    <div class="text-start pt-2 border-top border-bottom">
        <p class="text-break fs-4">Maksimal kedatangan adalah 1 jam setelah waktu pendaftaran ulang atau nomor antrian akan dianggap hangus.</p>
        <button class="w-100 btn btn-primary text-uppercase mb-2" wire:click="downloadPdf" wire:loading.attr="disabled">Download Bukti Pendaftaran</button>
        <a href="{{ route('home') }}" class="w-100 btn btn-danger text-uppercase">Kembali Ke Halaman Utama</a>
    </div>
</main>
