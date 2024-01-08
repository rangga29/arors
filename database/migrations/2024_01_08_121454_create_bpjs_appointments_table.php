<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bpjs_kesehatan_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sc_id')->constrained('schedules')->cascadeOnDelete();
            $table->string('bap_ucode')->unique();
            $table->string('bap_no');
            $table->string('bap_token');
            $table->string('bap_queue');
            $table->time('bap_registration_time');
            $table->time('bap_appointment_time');
            $table->string('bap_norm');
            $table->string('bap_name');
            $table->date('bap_birthday');
            $table->string('bap_phone');
            $table->string('bap_bpjs');
            $table->string('bap_ppk1');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bpjs_appointments');
    }
};
