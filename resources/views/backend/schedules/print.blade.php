<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }

        .watermark {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            opacity: 0.3;
            z-index: -1000;
        }

        .watermark img {
            width: 300px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 0;
            font-family: Arial, sans-serif;
            margin: 0.5cm 1.6cm;
        }

        .content-container {
            text-align: center;
        }

        .centered-image img {
            height: 48px;
            margin-bottom: 20px;
        }

        .title {
            font-size: 28px;
            margin: 0;
        }

        table {
            font-size: xx-small;
            margin: 0;
        }

        footer {
            position: fixed;
            bottom: 0.5cm;
            left: 0cm;
            right: 1cm;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="watermark">
        <img src="{{ public_path('images/rsck_logo.png') }}" alt="Watermark">
    </div>
    <div class="content-container">
        <h2 class="title">JADWAL PRAKTIK DOKTER</h2>
        <p class="lead fs-4 fw-bolder border-bottom">{{ \Carbon\Carbon::createFromFormat('Y-m-d', $date)->isoFormat('dddd, DD MMMM YYYY') }}</p>
    </div>
    <div class="container">
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>Nama Klinik</th>
                    <th>Nama Dokter</th>
                    <th>Jam Praktek</th>
                    <th>Umum</th>
                    <th>BPJS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($scheduleData as $data)
                    <tr>
                        <td>{{ $data->sc_clinic_name }}</td>
                        <td>{{ $data->sc_doctor_name }}</td>
                        <td style="text-align: center">{{ $data->sc_start_time }} - {{ $data->sc_end_time }}</td>
                        <td style="text-align: center">{{ $data->sc_max_umum }}</td>
                        <td style="text-align: center">{{ $data->sc_max_bpjs }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <footer>
            <p style="font-size: 8px;">CREATED DATE : {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', now())->isoFormat('DD MMMM YYYY -- hh:mm:ss') }}</p>
        </footer>
    </div>
</body>
</html>
