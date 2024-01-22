@extends('backend.layouts.main', ['page_title' => 'DASHBOARD'])

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right"></div>
                    <h4 class="page-title">DASHBOARD</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h5 class="page-title text-uppercase">TOTAL PASIEN TANGGAL - {{ \Carbon\Carbon::createFromFormat('Y-m-d', $date)->isoFormat('dddd, DD MMMM YYYY') }}</h5>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-xxl-6 row-cols-lg-3 row-cols-md-2">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h4 class="text-muted fw-normal mt-0 fw-bolder" title="TOTAL PASIEN">TOTAL</h4>
                                <h3 class="my-3">{{ $totalAppointmentsTomorrow }} PASIEN</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h4 class="text-muted fw-normal mt-0 fw-bolder" title="TOTAL PASIEN UMUM">UMUM</h4>
                                <h3 class="my-3">{{ $totalUmumAppointments }} PASIEN</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h4 class="text-muted fw-normal mt-0 fw-bolder" title="TOTAL PASIEN ASURANSI">ASURANSI</h4>
                                <h3 class="my-3">{{ $totalAsuransiAppointments }} PASIEN</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h4 class="text-muted fw-normal mt-0 fw-bolder" title="TOTAL PASIEN BPJS">BPJS</h4>
                                <h3 class="my-3">{{ $totalBPJSKesehatanAppointments }} PASIEN</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h4 class="text-muted fw-normal mt-0 fw-bolder" title="TOTAL PASIEN FISIOTERAPI">FISIOTERAPI</h4>
                                <h3 class="my-3">{{ $totalFisioterapiAppointments }} PASIEN</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="flex-grow-1 overflow-hidden">
                                <h4 class="text-muted fw-normal mt-0 fw-bolder" title="TOTAL PASIEN BARU">BARU</h4>
                                <h3 class="my-3">{{ $totalNewAppointments }} PASIEN</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
