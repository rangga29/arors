<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AppointmentBackup extends Model
{
    protected $fillable = ['scb_id', 'apb_ucode', 'apb_no', 'apb_token', 'apb_queue', 'apb_type', 'apb_registration_time', 'apb_appointment_time', 'apb_norm', 'apb_name', 'apb_birthday', 'apb_phone', 'apb_business_partner', 'apb_bpjs', 'apb_ppk1', 'apb_skdp', 'apb_ssn', 'apb_gender', 'apb_address', 'apb_email'];

    public function getRouteKeyName(): string
    {
        return 'apb_ucode';
    }

    public function scheduleBackup(): BelongsTo
    {
        return $this->belongsTo(ScheduleBackup::class, 'scb_id');
    }
}
