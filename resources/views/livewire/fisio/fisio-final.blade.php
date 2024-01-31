<main class="background">
    <div class="text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('images/rsck.png') }}" alt="" height="57">
        @if($service = 'umum')
            <h2>REGISTRASI PASIEN FISIOTERAPI</h2>
            <p class="lead fs-4 pb-2 fw-bolder border-bottom">BUKTI PENDAFTARAN</p>
        @endif
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NORM</strong></p>
                <p class="ms-2"><i class="ri-arrow-right-double-line"></i> {{ $patientData['fap_norm'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NAMA PASIEN</strong></p>
                <p class="ms-2"><i class="ri-arrow-right-double-line"></i> {{ $patientData['fap_name'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>TANGGAL PENDAFTARAN</strong></p>
                <p class="ms-2 text-uppercase"><i class="ri-arrow-right-double-line"></i> {{ \Carbon\Carbon::createFromFormat('Y-m-d', $scheduleDateData['sd_date'])->isoFormat('dddd, DD MMMM YYYY') }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NAMA KLINIK</strong></p>
                @if($patientData['fap_type'] == 'fisio_umum')
                    <p class="ms-2 text-uppercase"><i class="ri-arrow-right-double-line"></i> FISIOTERAPI UMUM </p>
                @else
                    <p class="ms-2 text-uppercase"><i class="ri-arrow-right-double-line"></i> FISIOTERAPI BPJS </p>
                @endif
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>NO ANTRIAN</strong></p>
                <p class="ms-2 "><i class="ri-arrow-right-double-line"></i> {{ $patientData['fap_queue'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>KODE TOKEN</strong></p>
                <p class="ms-2 text-uppercase"><i class="ri-arrow-right-double-line"></i> {{ $patientData['fap_token'] }}</p>
            </div>
            <div class="col-12 mb-1">
                <p class="mb-0"><strong>WAKTU PENDAFTARAN ULANG</strong></p>
                <p class="ms-2"><i class="ri-arrow-right-double-line"></i> {{ \Carbon\Carbon::createFromFormat('H:i:s', $patientData['fap_registration_time'])->format('H:i') }} WIB</p>
            </div>
        </div>
    </div>

    <div class="text-start pt-2 border-top border-bottom">
        <p class="text-break fs-4">Mohon datang tepat waktu sesuai waktu pendaftaran ulang.</p>
        <p class="text-break fs-4">Nomor antrian ini adalah nomor antrian tindakan di Fisioterapi.</p>
        <p class="text-break fs-4">Apabila pasien datang tidak sesuai jam daftar ulang, maka syart dan ketentuan berlaku.</p>
        <button class="w-100 btn btn-primary text-uppercase mb-2" wire:click="downloadPdf" wire:loading.attr="disabled">Download Bukti Pendaftaran</button>
        <a href="{{ route('home') }}" class="w-100 btn btn-danger text-uppercase">Kembali Ke Halaman Utama</a>
    </div>
</main>
