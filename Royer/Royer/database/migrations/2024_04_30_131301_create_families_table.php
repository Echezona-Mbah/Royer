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
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('surname')->nullable();
            $table->string('kindred')->nullable();
            $table->string('village')->nullable();
            $table->string('town')->nullable();
            $table->string('Area')->nullable();
            $table->string('origin')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('pass_morocco')->nullable();
            $table->string('year_morocco')->nullable();
            $table->string('city_morocco')->nullable();
            $table->string('telephone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('mother_alive')->nullable();
            $table->string('name_kins')->nullable();
            $table->string('village_kins')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
