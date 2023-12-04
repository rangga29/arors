<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('business_partners', function (Blueprint $table) {
            $table->id();
            $table->string('bp_ucode')->unique();
            $table->bigInteger('bp_order');
            $table->string('bp_code');
            $table->string('bp_name');
            $table->string('bp_type');
            $table->string('bp_scheme');
            $table->string('bp_contract')->nullable();
            $table->boolean('bp_active')->default(true);
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('business_partners');
    }
};
