<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Clinic extends Model
{
    protected $fillable = ['cl_ucode', 'cl_code', 'cl_name', 'cl_order', 'cl_active', 'created_by', 'updated_by'];

    public function getRouteKeyName(): string
    {
        return 'cl_ucode';
    }

    protected static function boot(): void
    {
        parent::boot();
        static::creating(function ($clinic) {
            $clinic->cl_ucode = Str::random(10);
            $clinic->created_by = Auth::user()->name;
        });
        static::updating(function ($clinic) {
            $clinic->updated_by = Auth::user()->name;
        });
    }
}
