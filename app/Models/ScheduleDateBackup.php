<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleDateBackup extends Model
{
    protected $fillable = ['sdb_ucode', 'sdb_date', 'sdb_is_downloaded', 'sdb_is_holiday', 'sdb_holiday_desc', 'created_by', 'updated_by'];

    public function getRouteKeyName(): string
    {
        return 'sdb_ucode';
    }
}
