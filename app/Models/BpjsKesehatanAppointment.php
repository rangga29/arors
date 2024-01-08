<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BpjsKesehatanAppointment extends Model
{
    protected $fillable = ['sc_id', 'bap_ucode', 'bap_no', 'bap_token', 'bap_queue', 'bap_registration_time', 'bap_appointment_time', 'bap_norm', 'bap_name', 'bap_birthday', 'bap_phone', 'bap_bpjs', 'bap_ppk1', 'bap_skdp'];

    public function getRouteKeyName(): string
    {
        return 'bap_ucode';
    }

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }
}
