@extends('backend.layouts.main', ['page_title' => 'Data Histori Jadwal Dokter - ' . $date])

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
                        <form class="d-flex" method="POST" action="{{ route('schedules.backup.dates.show.redirect') }}">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control shadow border-0" name="schedule-date" id="schedule-date" data-today="{{ $date_original }}" data-schedule-date-first="{{ $schedule_date_first }}" data-schedule-date-last="{{ $schedule_date_last }}">
                                <span class="input-group-text bg-primary border-primary text-white">
                                    <i class="ri-calendar-todo-fill fs-13"></i>
                                </span>
                            </div>
                            <button type="submit" class="btn btn-primary ms-2"><i class="ri-refresh-line"></i></button>
                        </form>
                    </div>
                    <h4 class="page-title">Data Histori Jadwal Dokter - {{ $date }}</h4>
                </div>
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>SUCCESS - </strong>{{ session('success') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>ERROR : </strong>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
                            <th rowspan="2" class="align-middle text-center">No</th>
                            <th colspan="2" class="text-center">Klinik</th>
                            <th colspan="2" class="text-center">Dokter</th>
                            <th colspan="2" class="text-center">Operational Time</th>
                            <th colspan="2" class="text-center">Pasien Umum</th>
                            <th colspan="2" class="text-center">Pasien BPJS</th>
                            <th rowspan="2" class="align-middle text-center"></th>
                            @hasanyrole('administrator|sisfo')
                            <th rowspan="2" class="align-middle text-center">CR</th>
                            <th rowspan="2" class="align-middle text-center">UP</th>
                            @endhasanyrole
                        </tr>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Max</th>
                            <th>Online</th>
                            <th>Max</th>
                            <th>Online</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($schedules as $schedule)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $schedule->scb_clinic_code }}</td>
                                <td>{{ $schedule->scb_clinic_name }}</td>
                                <td>{{ $schedule->scb_doctor_code }}</td>
                                <td>{{ $schedule->scb_doctor_name }}</td>
                                <td>{{ $schedule->scb_start_time }}</td>
                                <td>{{ $schedule->scb_end_time }}</td>
                                <td>{{ $schedule->scb_max_umum }}</td>
                                <td>{{ $schedule->scb_online_umum }}</td>
                                <td>{{ $schedule->scb_max_bpjs }}</td>
                                <td>{{ $schedule->scb_online_bpjs }}</td>
                                <td>
                                    <span class="fs-20">
                                        @if($schedule->scb_available)
                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                        @else
                                            <i class="ri-close-circle-fill text-danger"></i>
                                        @endif
                                    </span>
                                </td>
                                @hasanyrole('administrator|sisfo')
                                <td>{{ $schedule->created_by }}</td>
                                <td>{{ $schedule->updated_by }}</td>
                                @endhasanyrole
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
        'resources/js/customs/schedules.js'
    ])
@endsection

