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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('shift');
            $table->string('pit');
            $table->string('activity');
            $table->string('exca');
            $table->foreignId('unit_id_1');
            $table->foreignId('unit_id_2');
            $table->foreignId('unit_id_3');
            $table->foreignId('unit_id_4');
            $table->foreignId('unit_id_5');
            $table->integer('ritase');
            $table->time('start');
            $table->time('finish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
