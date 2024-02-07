<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('appointment_backups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scb_id')->constrained('schedule_backups')->cascadeOnDelete();
            $table->string('apb_ucode')->unique();
            $table->string('apb_no');
            $table->string('apb_token');
            $table->string('apb_queue');
            $table->string('apb_type');
            $table->time('apb_registration_time');
            $table->time('apb_appointment_time');
            $table->string('apb_norm');
            $table->string('apb_name');
            $table->date('apb_birthday');
            $table->string('apb_gender');
            $table->string('apb_phone');
            $table->string('apb_business_partner')->nullable();
            $table->string('apb_bpjs')->nullable();
            $table->string('apb_ppk1')->nullable();
            $table->string('apb_skdp')->nullable();
            $table->string('apb_ssn')->nullable();
            $table->text('apb_address')->nullable();
            $table->string('apb_email')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointment_backups');
    }
};
