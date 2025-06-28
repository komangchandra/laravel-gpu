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
            $table->dateTime('datetime');
            $table->decimal('hm');
            $table->string('vol');
            $table->integer('initial_flow');
            $table->integer('final_flow');
            $table->string('driver');
            $table->string('location');
            $table->string('username');
            $table->string('unit');
            $table->string('no_lambung');
            $table->string('owner');
            $table->string('fuel_truck');
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
