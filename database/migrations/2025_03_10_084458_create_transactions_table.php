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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('time');
            $table->string('hm');
            $table->string('vol');
            $table->string('initial_flow');
            $table->string('final_flow');
            $table->string('driver');
            $table->string('location');
            $table->foreignId('user_id');
            $table->foreignId('unit_id');
            // $table->foreignId('fuel_truck_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
