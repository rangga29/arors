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
        <h2>REGISTRASI PASIEN FISIOTERAPI</h2>
        <p class="lead fs-5">Form Registrasi Dikhususkan Untuk Pasien Fisioterapi</p>
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

    <form wire:submit.prevent="checkPatient">
        <div class="mb-3">
            <label for="norm" class="form-label fs-4">No Rekam Medis (NORM)</label>
            <input type="text" class="form-control form-control-lg shadow border-0" name="norm" id="norm" wire:model="norm" placeholder="No Medical Record (NORM)" maxlength="8" oninput="this.value = this.value.replace(/\D/g, '');" autofocus autocomplete required>
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label fs-4">Tanggal Lahir</label>
            <div x-data="{ birthday: '' }">
                <input type="text" class="form-control form-control-lg shadow border-0" name="birthday" id="birthday" wire:model="birthday" x-model="birthday" x-on:input="formatDate" placeholder="dd/mm/yyyy" autocomplete required>
            </div>
            {{--<input type="date" class="form-control form-control-lg shadow border-0 form-date" name="birthday" id="birthday" wire:model="birthday" data-date="" data-date-format="DD/MM/YYYY" value="{{ $todayDate }}" autocomplete required>--}}
        </div>
        <div class="mb-3">
            <label for="service" class="form-label fs-4">Pilihan Layanan</label>
            <select class="form-select form-select-lg" name="service" id="service" wire:model="service" required>
                <option value="" selected>Pilihan Layanan</option>
                <option value="fisio_umum_pagi" class="text-uppercase">Pasien Fisioterapi Umum -- Pagi</option>
                <option value="fisio_umum_sore" class="text-uppercase">Pasien Fisioterapi Umum -- Sore</option>
                <option value="fisio_bpjs_pagi" class="text-uppercase">Pasien Fisioterapi BPJS -- Pagi</option>
                <option value="fisio_bpjs_sore" class="text-uppercase">Pasien Fisioterapi BPJS -- Sore</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">No Handphone</label>
            <input type="text" class="form-control form-control-lg shadow border-0" name="phone_number" id="phone_number" wire:model="phone_number" placeholder="No Handphone" oninput="this.value = this.value.replace(/\D/g, '');" autofocus autocomplete required>
        </div>
        <div class="mb-3">
            <label for="selectedDate" class="form-label">Tanggal Berobat</label>
            <select class="form-select form-select-lg" id="selectedDate" wire:model.live="selectedDate" required>
                <option value="" selected>Pilih Tanggal Berobat</option>
                @foreach($appointmentDates as $appointmentDate)
                    <option value="{{ $appointmentDate->sd_ucode }}" {{ $appointmentDate->sd_is_holiday ? 'disabled' : '' }}>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $appointmentDate->sd_date)->isoFormat('dddd, DD MMMM YYYY') }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="w-100 btn btn-primary btn-lg" wire:loading.attr="disabled" {{ !$isOpen ? 'disabled' : '' }}>Submit</button>
    </form>
</main>

@section('script')
    @vite(['resources/js/customs/patient-check-form.js'])
@endsection
