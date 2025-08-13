<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_devis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('devis_no');
            $table->double('price', 8, 2);
            $table->boolean('status')->default(true);
            $table->string('company_name');
            $table->string('representative_name');
            $table->string('usage_location');
            $table->string('usage_duration');
            $table->string('email');
            $table->string('gsm_number');
            $table->string('whatsapp_number')->nullable();
            $table->string('mobilization_date');
            $table->longText('additional_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_devis');
    }
};
