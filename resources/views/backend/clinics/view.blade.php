@extends('backend.layouts.main', ['page_title' => 'Data Klinik'])

@section('css')
    @vite([
        'node_modules/datatables.net-bs5/css/dataTables.bootstrap5.min.css',
        'node_modules/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css'
    ])
@endsection

@section('content')
    @include('backend.layouts.header', ['title' => 'Data Klinik'])
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="basic-datatable" class="table table-striped table-bordered table-centered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Aktif</th>
                                <th>Created By</th>
                                <th>Updated By</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clinics as $clinic)
                                <tr>
                                    <th scope="row">{{ $clinic->cl_order }}</th>
                                    <td>{{ $clinic->cl_code }}</td>
                                    <td>{{ $clinic->cl_name }}</td>
                                    <td>
                                        <span class="fs-20 px-1">
                                            @if($clinic->cl_active)
                                                <i class="ri-checkbox-circle-fill text-success"></i>
                                            @else
                                                <i class="ri-close-circle-fill text-danger"></i>
                                            @endif
                                        </span>
                                    </td>
                                    <td>{{ $clinic->created_by }}</td>
                                    <td>{{ $clinic->updated_by }}</td>
                                    <td style="max-width: 50px;">
                                        <div class="d-flex align-content-center">
                                            <button type="button" class="btn btn-sm btn-warning ms-2 cl-edit" title="EDIT DATA" data-bs-toggle="modal" data-bs-target="#edit-modal" data-clinic-ucode="{{ $clinic->cl_ucode }}">
                                                <i class="ri-file-edit-fill"></i>
                                            </button>
                                            <form method="POST" action="{{ route('clinics.destroy', $clinic->cl_ucode) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger ms-2" title="DELETE DATA" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                                    <i class="ri-delete-bin-fill"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div id="add-modal" class="modal modal-lg fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-primary">
                        <h4 class="modal-title" id="dark-header-modalLabel">Tambah Data Klinik</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="ps-3 pe-3 mt-2 mb-4" action="{{ route('clinics.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="created_by" id="add_created_by" value="{{ auth()->user()->username }}">
                            <div class="mb-3">
                                <label for="add_cl_code" class="form-label">Kode Klinik</label>
                                <input type="text" class="form-control" name="cl_code" id="add_cl_code" placeholder="Kode Klinik" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_cl_name" class="form-label">Nama Klinik</label>
                                <input type="text" class="form-control" name="cl_name" id="add_cl_name" placeholder="Nama Klinik" required>
                            </div>
                            <div class="mb-3">
                                <label for="add_cl_order" class="form-label">Nomor Urutan</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" name="cl_order" id="add_cl_order" placeholder="Nomor Urutan" required>
                                    <button type="button" class="btn btn-dark cl-order">Gunakan Nomor Terakhir</button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cl_active" id="add_cl_active_on" value="1" checked>
                                    <label for="add_cl_active_on" class="form-check-label">Aktif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cl_active" id="add_cl_active_off" value="0">
                                    <label for="add_cl_active_off" class="form-check-label">Tidak Aktif</label>
                                </div>
                            </div>
                            <div class="mb-3 text-center">
                                <button class="btn btn-primary" type="submit">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="edit-modal" class="modal modal-lg fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-warning">
                        <h4 class="modal-title" id="dark-header-modalLabel">Edit Data Klinik</h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="overlay" style="display: none;">
                            <div class="d-flex justify-content-center">
                                <div class="spinner-border" role="status"></div>
                            </div>
                        </div>
                        <form class="ps-3 pe-3 mt-2 mb-4" action="#" method="POST" id="editForm">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="updated_by" id="edit_updated_by" value="{{ auth()->user()->username }}">
                            <div class="mb-3">
                                <label for="edit_cl_code" class="form-label">Kode Klinik</label>
                                <input type="text" class="form-control" name="cl_code" id="edit_cl_code" placeholder="Kode Klinik" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_cl_name" class="form-label">Nama Klinik</label>
                                <input type="text" class="form-control" name="cl_name" id="edit_cl_name" placeholder="Nama Klinik" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_cl_order" class="form-label">Nomor Urutan</label>
                                <input type="number" class="form-control" name="cl_order" id="edit_cl_order" placeholder="Nomor Urutan" required>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cl_active" id="edit_cl_active_on" value="1">
                                    <label for="edit_cl_active_on" class="form-check-label">Aktif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" name="cl_active" id="edit_cl_active_off" value="0">
                                    <label for="edit_cl_active_off" class="form-check-label">Tidak Aktif</label>
                                </div>
                            </div>
                            <div class="mb-3 text-center">
                                <button class="btn btn-primary" type="submit">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite([
        'resources/js/customs/datatable.js',
        'resources/js/customs/clinics.js'
    ])
@endsection
