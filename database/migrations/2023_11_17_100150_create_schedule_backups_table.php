<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedule_backups', function (Blueprint $table) {
            $table->id();
            $table->string('scb_ucode')->unique();
            $table->date('scb_date');
            $table->string('scb_doctor_code');
            $table->string('scb_doctor_name');
            $table->string('scb_clinic_code');
            $table->string('scb_clinic_name');
            $table->string('scb_operational_time_code');
            $table->string('scb_operational_time_name');
            $table->time('scb_start_time');
            $table->time('scb_end_time');
            $table->boolean('scb_umum');
            $table->boolean('scb_bpjs');
            $table->boolean('scb_available');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedule_backups');
    }
};
