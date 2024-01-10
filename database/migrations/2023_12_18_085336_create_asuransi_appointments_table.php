<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('asuransi_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ap_id')->constrained('appointments')->cascadeOnDelete();
            $table->foreignId('bp_id')->constrained('business_partners')->cascadeOnDelete();
            $table->string('aap_norm');
            $table->string('aap_name');
            $table->date('aap_birthday');
            $table->string('aap_phone');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asuransi_appointments');
    }
};
