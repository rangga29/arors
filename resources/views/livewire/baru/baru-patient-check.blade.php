@section('css')
    @vite(['node_modules/select2/dist/css/select2.min.css'])
@endsection

<main class="background">
    <div wire:loading wire:target="checkPatient" id="overlay-form" style="display: none;">
        <div class="d-flex justify-content-center spinner-container">
            <div class="spinner-border" role="status"></div>
        </div>
    </div>

    <div class="pb-3 text-center">
        <a href="{{ route('home') }}">
            <img class="d-block mx-auto mb-4" src="{{ asset('images/logo_rsck_new_resize.png') }}" alt="" height="57">
        </a>
        <h2>REGISTRASI PASIEN BARU</h2>
        <p class="lead fs-5">Form Registrasi Digunakan Untuk Pasien Umum Yang Belum Pernah Berobat di RSCK.</p>
        @if(!$isOpen)
            <div class="alert alert-danger">
                @if($currentHour < 23 && $currentHour > 6)
                    <span class="fs-4">Registrasi Untuk Tanggal {{ \Carbon\Carbon::createFromFormat('Y-m-d', $appointmentDate)->isoFormat('dddd, DD MMMM YYYY')  }} Belum Dibuka</span>
                @else
                    <span class="fs-4">Registrasi Untuk Tanggal {{ \Carbon\Carbon::createFromFormat('Y-m-d', $todayDate)->isoFormat('dddd, DD MMMM YYYY')  }} Sudah Ditutup</span>
                @endif
            </div>
        @endif
    </div>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            <span class="fs-4">{{ session('error') }}</span>
        </div>
    @endif

    @if (!$isInBpjs)
        <form wire:submit.prevent="checkPatient">
            <div class="mb-3">
                <label for="nik" class="form-label fs-4">Nomor Induk Kependudukan (NIK)</label>
                <input type="text" class="form-control form-control-lg shadow border-0" name="nik" id="nik" wire:model="nik" placeholder="Nomor Induk Kependudukan (NIK)" maxlength="16" oninput="this.value = this.value.replace(/\D/g, '');" autofocus autocomplete required>
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label fs-4">Tanggal Lahir</label>
                <div x-data="{ birthday: '' }">
                    <input type="text" class="form-control form-control-lg shadow border-0" name="birthday" id="birthday" wire:model="birthday" x-model="birthday" x-on:input="formatDate" placeholder="dd/mm/yyyy" autocomplete required>
                </div>
                {{--<input type="date" class="form-control form-control-lg shadow border-0 form-date" name="birthday" id="birthday" wire:model="birthday" data-date="" data-date-format="DD/MM/YYYY" value="{{ $todayDate }}" autocomplete required>--}}
            </div>
            <button type="submit" class="w-100 btn btn-primary btn-lg" wire:loading.attr="disabled" {{ !$isOpen ? 'disabled' : '' }}>Cek Data</button>
        </form>
    @else
        @livewire('baru.baru-appointment', ['patientData' => $patientData])
    @endif
</main>

@section('script')
    @vite(['resources/js/customs/patient-check-form.js'])
@endsection
