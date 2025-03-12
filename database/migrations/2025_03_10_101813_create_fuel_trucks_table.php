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
        Schema::create('fuel_trucks', function (Blueprint $table) {
            $table->id();
            $table->string('fuel_truck_id');
            $table->string('fuel_truck_name');
            $table->integer('volume');
            $table->integer('total_flow');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_trucks');
    }
};
