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
        Schema::create('keluhan', function (Blueprint $table) {
            $table->id('id_keluhan');
            $table->text('keluhan_pasien');
            $table->foreignId('id_dokter')->constrained('dokter');
            $table->foreignId('id_pasien')->constrained('pasien');
            $table->foreignId('id_petugas')->constrained('petugas');
            // $table->unsignedBigInteger('id_dokter');
            // $table->unsignedBigInteger('id_pasien');
            // $table->unsignedBigInteger('id_petugas');

            // $table->foreign('id_dokter')->references('id_dokter')->on('dokter');
            // $table->foreign('id_pasien')->references('id_pasien')->on('pasien');
            // $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};