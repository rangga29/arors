<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/rsck_trans.png') }}">

    <title>Registrasi Online Rumah Sakit Cahya Kawaluyan</title>

    @vite(['resources/scss/app.scss', 'resources/scss/icons.scss', 'resources/js/head.js'])
</head>
<body class="bg-home">
    <div class="container my-5">
        <header class="d-flex align-items-center pb-3 mb-3">
            <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                <img src="{{ asset('images/rsck.png') }}" alt="Logo" class="logo-image">
            </a>
        </header>
        <main>
            <h1 class="text-body-emphasis text-center text-uppercase fw-bolder">Aplikasi Registrasi Online Rumah Sakit</h1>
            <div class="container mt-4 mb-5">
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <a href="{{ route('umum') }}" class="btn btn-one btn-lg px-2 mb-2 fs-4 fw-bolder d-block custom-home-btn">PASIEN UMUM / KONTRAKTOR</a>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('bpjs') }}" class="btn btn-two btn-lg px-2 mb-2 fs-4 fw-bolder d-block custom-home-btn">PASIEN BPJS (JKN)</a>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('fisioterapi') }}" class="btn btn-one btn-lg px-2 mb-4 fs-4 fw-bolder d-block custom-home-btn">PASIEN FISIOTERAPI</a>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('baru') }}" class="btn btn-two btn-lg px-2 mb-2 fs-4 fw-bolder d-block custom-home-btn">PASIEN BARU UMUM</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-4">
                <div class="row g-5">
                    <div class="col-md-6 d-flex flex-column">
                        <a href="{{ route('cek-antrian.norm') }}" class="btn btn-three btn-lg fw-bolder px-4">CEK NOMOR ANTRIAN</a>
                    </div>

                    <div class="col-md-6 d-flex flex-column">
                        <a href="https://www.rscahyakawaluyan.com/doctors" class="btn btn-three btn-lg fw-bolder px-4" target="_blank">CEK JADWAL DOKTER</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    @vite(['resources/js/app.js', 'resources/js/layout.js'])
</body>
</html>


