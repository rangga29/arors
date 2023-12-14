@section('css')
    @vite(['node_modules/select2/dist/css/select2.min.css'])
@endsection

<main class="background">
    <div wire:loading wire:target="checkPatient" id="overlay-form" style="display: none;">
        <div class="d-flex justify-content-center spinner-container">
            <div class="spinner-border" role="status"></div>
        </div>
    </div>

    <div wire:loading wire:target="createAppointment" id="overlay-form" style="display: none;">
        <div class="d-flex justify-content-center spinner-container">
            <div class="spinner-border" role="status"></div>
        </div>
    </div>

    <div class="pb-3 text-center">
        <img class="d-block mx-auto mb-4" src="{{ asset('images/rsck.png') }}" alt="" height="57">
        @if($type = 'Pasien Lama')
            <h2>REGISTRASI PASIEN UMUM / KONTRAKTOR</h2>
            <p class="lead fs-5">Form Registrasi Digunakan Untuk Pasien Yang Sudah Memiliki Nomor Rekam Medis (NORM)</p>
        @endif
    </div>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (!$isInMedin)
        <form wire:submit.prevent="checkPatient">
            <div class="mb-3">
                <label for="norm" class="form-label fs-4">No Medical Record (NORM)</label>
                <input type="text" class="form-control form-control-lg shadow border-0" name="norm" id="norm" wire:model="norm" placeholder="No Medical Record (NORM)" maxlength="8" oninput="this.value = this.value.replace(/\D/g, '');" autofocus autocomplete required>
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label fs-4">Tanggal Lahir</label>
                <div x-data="{ birthday: '' }">
                    <input type="text" class="form-control form-control-lg shadow border-0" name="birthday" id="birthday" wire:model="birthday" x-model="birthday" x-on:input="formatDate" placeholder="dd/mm/yyyy" autocomplete required>
                </div>
                {{--<input type="date" class="form-control form-control-lg shadow border-0 form-date" name="birthday" id="birthday" wire:model="birthday" data-date="" data-date-format="DD/MM/YYYY" value="{{ $todayDate }}" autocomplete required>--}}
            </div>
            @if($type = 'Pasien Lama')
                <div class="mb-3">
                    <label for="service" class="form-label fs-4">Pilihan Layanan</label>
                    <select class="form-select form-select-lg" name="service" id="service" wire:model="service" required>
                        <option value="" selected>Pilihan Layanan</option>
                        <option value="umum">Pasien Umum</option>
                        <option value="asuransi">Pasien Asuransi / Kontraktor</option>
                    </select>
                </div>
            @endif
            <button type="submit" class="w-100 btn btn-primary btn-lg" wire:loading.attr="disabled">Cek Data</button>
            {{-- <button class="w-100 btn btn-primary btn-lg" wire:click="checkPatient" wire:loading.attr="disabled">Cek Data</button> --}}
        </form>
    @else
        @if($serviceType == 'umum')
            @livewire('umum', ['patientData' => $patientData])
        @else
        @endif
    @endif
</main>

@section('script')
    @vite(['resources/js/customs/umum-form.js'])
@endsection
