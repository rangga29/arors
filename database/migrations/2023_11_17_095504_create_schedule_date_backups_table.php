<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedule_date_backups', function (Blueprint $table) {
            $table->id();
            $table->string('sdb_ucode')->unique();
            $table->date('sdb_date');
            $table->boolean('sdb_is_downloaded')->default(false);
            $table->boolean('sdb_is_holiday')->default(false);
            $table->string('sdb_holiday_desc')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedule_date_backups');
    }
};
