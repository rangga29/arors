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
        <img class="d-block mx-auto mb-4" src="{{ asset('images/rsck.png') }}" alt="" height="57">
        <h2>CEK NOMOR ANTRIAN</h2>
    </div>

    @if (session()->has('error'))
        <div class="alert alert-danger">
            <span class="fs-4">{{ session('error') }}</span>
        </div>
    @endif

    @if(!$isHaveAppointment)
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
            </div>
            <div class="mb-3">
                <label for="selectedDate" class="form-label fs-4">Tanggal Berobat</label>
                <select class="form-select form-select-lg" id="selectedDate" wire:model.live="selectedDate" required>
                    <option value="" selected>Pilih Tanggal Berobat</option>
                    @foreach($appointmentDates as $appointmentDate)
                        <option value="{{ $appointmentDate->sd_ucode }}" {{ $appointmentDate->sd_is_holiday ? 'disabled' : '' }}>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $appointmentDate->sd_date)->isoFormat('dddd, DD MMMM YYYY') }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="w-100 btn btn-primary btn-lg" wire:loading.attr="disabled">Submit</button>
        </form>
        <a href="{{ route('cek-antrian.norm') }}" class="w-100 btn btn-one btn-lg mt-2 fw-bold">Cek Antrian Dengan NORM</a>
    @else
        @livewire('cek.show-cek-data-nik', ['newData' => $newData])
    @endif
</main>

@section('script')
    @vite(['resources/js/customs/patient-check-form.js'])
@endsection
