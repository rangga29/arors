<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UmumAppointment extends Model
{
    protected $fillable = ['ap_id', 'uap_norm', 'uap_name', 'uap_birthday', 'uap_gender', 'uap_phone'];

    public function getRouteKeyName(): string
    {
        return 'id';
    }

    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class, 'ap_id');
    }
}
