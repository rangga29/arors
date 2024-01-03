<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        @page {
            margin: 0cm 0cm;
        }
        /* Container for watermark */
        .watermark {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none; /* Ensures the watermark doesn't interfere with text selection */
            opacity: 0.3; /* Adjust the opacity of the watermark */
            z-index: -1000; /* Place the watermark behind the content */
        }

        /* Style for the watermark image */
        .watermark img {
            width: 300px; /* Set the width of the watermark image */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* Center the image */
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Set the height to cover the viewport height */
            padding: 0; /* Remove default padding */
            font-family: Arial, sans-serif; /* Set font-family as needed */
            margin-top: 0.5cm;
            margin-left: 1cm;
            margin-right: 1cm;
        }

        /* Container for image and title */
        .content-container {
            text-align: center;
        }

        /* Style for the image */
        .centered-image img {
            height: 48px; /* Set image height */
            margin-bottom: 20px; /* Add spacing between image and title */
        }

        /* Style for the title */
        .title {
            font-size: 28px;
            margin: 0; /* Reset margin */
        }

        .items p {
            font-size: small;
            margin-bottom: 0px;
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
    <div class="centered-image">
        <img src="{{ public_path('images/rsck_dark.png') }}" alt="" height="30">
    </div>
    <h2 class="title">REGISTRASI PASIEN ASURANSI</h2>
    <p class="lead fs-4 fw-bolder border-bottom">BUKTI PENDAFTARAN</p>
</div>
<div class="container">
    <div class="row">
        <hr>
        <div class="items">
            <p><strong>NORM : </strong>{{ $patientData['aap_norm'] }}</p>
        </div>
        <div class="items">
            <p><strong>NAMA PASIEN : </strong>{{ $patientData['aap_name'] }}</p>
        </div>
        <div class="items">
            <p><strong>TANGGAL LAHIR : </strong>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $patientData['aap_birthday'])->isoFormat('DD MMMM YYYY') }}</p>
        </div>
        <div class="items">
            <p><strong>NO. HANDPHONE : </strong>{{ $patientData['aap_phone'] }}</p>
        </div>
        <div class="items">
            <p><strong>TANGGAL REGISTRASI : </strong>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $scheduleDateData['sd_date'])->isoFormat('dddd, DD MMMM YYYY') }}</p>
        </div>
        <div class="items">
            <p><strong>NAMA KLINIK : </strong>{{ $scheduleData['sc_clinic_name'] }}</p>
        </div>
        <div class="items">
            <p><strong>NAMA DOKTER : </strong>{{ $scheduleData['sc_doctor_name'] }}</p>
        </div>
        <div class="items">
            <p><strong>NO ANTRIAN : </strong>{{ $patientData['aap_queue'] }}</p>
        </div>
        <div class="items">
            <p><strong>KODE TOKEN : </strong>{{ $patientData['aap_token'] }}</p>
        </div>
        <div class="items">
            <p><strong>NAMA ASURANSI : </strong>{{ $businessPartnerData['bp_name'] }}</p>
        </div>
        <div class="items">
            <p><strong>WAKTU REGISTRASI ULANG : </strong>{{ \Carbon\Carbon::createFromFormat('H:i:s', $patientData['aap_registration_time'])->format('H:i') }} WIB</p>
        </div>
        <hr>
        <p style="font-size: 16px;">Maksimal kedatangan adalah 1 jam setelah waktu registrasi ulang atau nomor antrian akan dianggap hangus.</p>
        <footer>
            <p style="font-size: 8px;">CREATED DATE : {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $patientData['created_at'])->isoFormat('DD MMMM YYYY -- hh:mm:ss') }}</p>
        </footer>
    </div>
</div>
</body>
</html>
