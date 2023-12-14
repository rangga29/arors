<form wire:submit.prevent="createAppointment">
    <div class="mb-1">
        <label for="name" class="form-label">Nama Pasien</label>
        <input type="text" class="form-control form-control-lg shadow border-0" name="name" id="name" value="{{ $patientData['FullName'] }}" readonly>
    </div>
    <div class="mb-1">
        <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
        <input type="text" class="form-control form-control-lg shadow border-0" name="date_of_birth" id="date_of_birth" value="{{ \Carbon\Carbon::createFromFormat('Ymd', $patientData['DateOfBirth'])->isoFormat('DD MMMM YYYY') }}" readonly>
    </div>
    <hr>
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
    <div class="mb-3">
        <label for="selectedClinic" class="form-label">Klinik</label>
        <select class="form-select form-select-lg" data-toggle="select2" id="selectedClinic" wire:model.live="selectedClinic" required>
            <option value="" selected>Pilih Klinik</option>
            @foreach($clinics as $clinic)
                <option value="{{ $clinic->cl_ucode }}">{{ $clinic->cl_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="selectedDoctor" class="form-label">Dokter</label>
        <select class="form-select form-select-lg" id="selectedDoctor" wire:model="selectedDoctor" required>
            <option value="" selected>Pilih Dokter</option>
            @if($doctors)
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->sc_doctor_code }}">{{ $doctor->sc_doctor_name }}</option>
                @endforeach
            @else
                <option value="">Tidak Ada Dokter</option>
            @endif
        </select>
    </div>
    <button type="submit" class="w-100 btn btn-primary btn-lg" wire:loading.attr="disabled">Submit</button>
</form>
