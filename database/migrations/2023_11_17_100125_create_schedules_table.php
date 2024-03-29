<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sd_id')->constrained('schedule_dates')->cascadeOnDelete();
            $table->string('sc_ucode')->unique();
            $table->string('sc_doctor_code');
            $table->string('sc_doctor_name');
            $table->string('sc_clinic_code');
            $table->string('sc_clinic_name');
            $table->string('sc_operational_time_code');
            $table->string('sc_operational_time_name');
            $table->time('sc_start_time');
            $table->time('sc_end_time');
            $table->boolean('sc_umum');
            $table->boolean('sc_bpjs');
            $table->integer('sc_counter_max_umum');
            $table->integer('sc_max_umum');
            $table->integer('sc_counter_max_bpjs');
            $table->integer('sc_max_bpjs');
            $table->integer('sc_counter_online_umum');
            $table->integer('sc_online_umum');
            $table->integer('sc_counter_online_bpjs');
            $table->integer('sc_online_bpjs');
            $table->boolean('sc_available');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
