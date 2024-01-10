<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BusinessPartner extends Model
{
    protected $fillable = ['bp_ucode', 'bp_order', 'bp_code', 'bp_name', 'bp_type', 'bp_scheme', 'bp_contract', 'bp_active', 'created_by', 'updated_by'];

    public function getRouteKeyName(): string
    {
        return 'bp_ucode';
    }

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($businessPartner) {
            $businessPartner->bp_ucode = Str::random(10);
            $businessPartner->created_by = Auth::user()->username;
        });
        static::updating(function ($businessPartner) {
            $businessPartner->updated_by = Auth::user()->username;
        });
    }

    public function asuransiAppointments(): HasMany
    {
        return $this->hasMany(AsuransiAppointment::class, 'bp_id');
    }
}
