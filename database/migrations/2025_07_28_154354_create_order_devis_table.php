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
            $table->string('client_firstname');
            $table->string('client_lastname');
            $table->string('client_email');
            $table->string('client_phone')->nullable();
            $table->string('client_company')->nullable();
            $table->string('client_role')->nullable();
            $table->longText('motif')->nullable();
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
