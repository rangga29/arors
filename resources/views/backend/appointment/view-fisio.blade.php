@extends('backend.layouts.main', ['page_title' => 'Data Appointment Fisioterapi - ' . $date])

@section('css')
    @vite([
        'node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
        'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css',
        'node_modules/flatpickr/dist/flatpickr.min.css'
    ])
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex" method="POST" action="{{ route('appointments.fisioterapi.show.redirect') }}">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control shadow border-0" name="appointment-date" id="appointment-date" data-today="{{ $date_original }}" data-schedule-date-first="{{ $schedule_date_first }}" data-schedule-date-last="{{ $schedule_date_last }}">
                                <span class="input-group-text bg-primary border-primary text-white">
                                    <i class="ri-calendar-todo-fill fs-13"></i>
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary ms-2"><i class="ri-refresh-line"></i></button>
                        </form>
                    </div>
                    <h4 class="page-title">Data Appointment Fisioterapi - {{ $date }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped table-bordered table-centered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Token</th>
                            <th>NORM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>No. Handphone</th>
                            <th>Tipe</th>
                            <th>Daftar Ulang</th>
                            <th>Appointment</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appointmentData as $appData)
                            <tr>
                                <td>{{ $appData['fap_queue'] }}</td>
                                <td>{{ $appData['fap_token'] }}</td>
                                <td>{{ $appData['fap_norm'] }}</td>
                                <td>{{ $appData['fap_name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($appData['birthday'])->isoFormat('DD MMMM YYYY') }}</td>
                                <td>{{ $appData['fap_phone'] }}</td>
                                <td>{{ $appData['fap_type'] == 'fisio_umum' ? 'UMUM' : 'BPJS' }}</td>
                                <td>{{ $appData['fap_registration_time'] }}</td>
                                <td>{{ $appData['fap_appointment_time'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite([
        'resources/js/customs/datatable.js',
        'resources/js/customs/appointments.js'
    ])
@endsection
