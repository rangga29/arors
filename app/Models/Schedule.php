<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Schedule extends Model
{
    protected $fillable = ['sd_id', 'sc_ucode', 'sc_doctor_code', 'sc_doctor_name', 'sc_clinic_code', 'sc_clinic_name', 'sc_operational_time_code', 'sc_operational_time_name', 'sc_start_time', 'sc_end_time', 'sc_umum', 'sc_bpjs', 'sc_counter_max_umum', 'sc_max_umum', 'sc_counter_max_bpjs', 'sc_max_bpjs', 'sc_counter_online_umum', 'sc_online_umum', 'sc_counter_online_bpjs', 'sc_online_bpjs', 'sc_available', 'created_by', 'updated_by'];

    public function getRouteKeyName(): string
    {
        return 'sc_ucode';
    }

    public function scheduleDate(): BelongsTo
    {
        return $this->belongsTo(ScheduleDate::class, 'sd_id');
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'sc_id');
    }
}
