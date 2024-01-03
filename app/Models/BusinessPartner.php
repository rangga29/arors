<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BusinessPartner extends Model
{
    protected $fillable = ['bp_ucode', 'bp_order', 'bp_code', 'bp_name', 'bp_type', 'bp_scheme', 'bp_contract', 'bp_active', 'created_by', 'updated_by'];

    public function getRouteKeyName(): string
    {
        return 'bp_ucode';
    }

    public function asuransiAppointments(): HasMany
    {
        return $this->hasMany(AsuransiAppointment::class);
    }
}
