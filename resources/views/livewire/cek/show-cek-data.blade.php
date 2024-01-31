<div>
    @if($umumData->count() !== 0)
        <h5 class="fs-4 text-white">UMUM</h5>
        @foreach($umumData as $uap)
            <div class="card card-body bg-black bg-opacity-25">
                <h4 class="card-title text-white">{{ $uap->appointment->schedule->sc_clinic_name }}</h4>
                <p class="card-text">{{ $uap->appointment->schedule->sc_doctor_name }}</p>
                <a href="{{ route('umum.final', $uap->appointment->ap_ucode) }}" class="w-100 btn btn-one btn-lg mt-2 fw-bold">Bukti Pendaftaran</a>
            </div>
        @endforeach
        <hr>
    @endif
    @if($asuransiData->count() !== 0)
        <h5 class="fs-4 text-white">ASURANSI</h5>
        @foreach($asuransiData as $aap)
            <div class="card card-body bg-black bg-opacity-25">
                <h4 class="card-title text-white">{{ $aap->appointment->schedule->sc_clinic_name }}</h4>
                <p class="card-text">{{ $aap->appointment->schedule->sc_doctor_name }}</p>
                <a href="{{ route('asuransi.final', $aap->appointment->ap_ucode) }}" class="w-100 btn btn-one btn-lg mt-2 fw-bold">Bukti Pendaftaran</a>
            </div>
        @endforeach
        <hr>
    @endif
    @if($bpjsData->count() !== 0)
        <h5 class="fs-4 text-white">BPJS</h5>
        @foreach($bpjsData as $bap)
            <div class="card card-body bg-black bg-opacity-25">
                <h4 class="card-title text-white">{{ $bap->appointment->schedule->sc_clinic_name }}</h4>
                <p class="card-text">{{ $bap->appointment->schedule->sc_doctor_name }}</p>
                <a href="{{ route('bpjs.final', $bap->appointment->ap_ucode) }}" class="w-100 btn btn-one btn-lg mt-2 fw-bold">Bukti Pendaftaran</a>
            </div>
        @endforeach
        <hr>
    @endif
    @if($fisioterapiData->count() !== 0)
            <h5 class="fs-4 text-white">FISIOTERAPI</h5>
            @foreach($fisioterapiData as $fap)
                <div class="card card-body bg-black bg-opacity-25">
                    <h4 class="card-title text-white">{{ $fap->fap_type == 'bpjs_umum' ? 'FISIOTERAPI UMUM' : 'FISIOTERAPI BPJS' }}</h4>
                    <a href="{{ route('fisioterapi.final', $fap->fap_ucode) }}" class="w-100 btn btn-one btn-lg mt-2 fw-bold">Bukti Pendaftaran</a>
                </div>
            @endforeach
            <hr>
    @endif
</div>
