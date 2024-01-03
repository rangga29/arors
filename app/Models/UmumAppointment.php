<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UmumAppointment extends Model
{
    protected $fillable = ['sc_id', 'uap_ucode', 'uap_no', 'uap_token', 'uap_queue', 'uap_registration_time', 'uap_appointment_time', 'uap_norm', 'uap_name', 'uap_birthday', 'uap_phone'];

    public function getRouteKeyName(): string
    {
        return 'uap_ucode';
    }

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }
}
