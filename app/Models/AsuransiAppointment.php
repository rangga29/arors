<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AsuransiAppointment extends Model
{
    protected $fillable = ['sc_id', 'bp_id', 'aap_ucode', 'aap_no', 'aap_token', 'aap_queue', 'aap_registration_time', 'aap_appointment_time', 'aap_norm', 'aap_name', 'aap_birthday', 'aap_phone'];

    public function getRouteKeyName(): string
    {
        return 'aap_ucode';
    }

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function businessPartner(): BelongsTo
    {
        return $this->belongsTo(BusinessPartner::class);
    }
}
