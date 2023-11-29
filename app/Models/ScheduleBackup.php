<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleBackup extends Model
{
    protected $fillable = [
        'scb_ucode', 'scb_date', 'scb_doctor_code', 'scb_doctor_name', 'scb_clinic_code', 'scb_clinic_name', 'scb_operational_time_code', 'scb_operational_time_name',
        'scb_start_time', 'scb_end_time', 'scb_umum', 'scb_bpjs', 'scb_available', 'created_by', 'updated_by'
    ];

    public function getRouteKeyName(): string
    {
        return 'scb_ucode';
    }
}
