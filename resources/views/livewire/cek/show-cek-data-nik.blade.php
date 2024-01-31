<div>
    @if($newData->count() !== 0)
        <h5 class="fs-4 text-white">UMUM</h5>
        @foreach($newData as $nap)
            <div class="card card-body bg-black bg-opacity-25">
                <h4 class="card-title text-white">{{ $nap->appointment->schedule->sc_clinic_name }}</h4>
                <p class="card-text">{{ $nap->appointment->schedule->sc_doctor_name }}</p>
                <a href="{{ route('baru.final', $nap->appointment->ap_ucode) }}" class="w-100 btn btn-one btn-lg mt-2 fw-bold">Bukti Pendaftaran</a>
            </div>
        @endforeach
        <hr>
    @endif
</div>
