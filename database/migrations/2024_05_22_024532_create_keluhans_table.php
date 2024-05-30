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
            $table->timestamp('waktu_pemeriksaan');
            $table->BigInteger('id_dokter')->unsigned();
            $table->BigInteger('id_pasien')->unsigned();
            $table->BigInteger('id_petugas')->unsigned();
            $table->foreign('id_dokter')->references('id_dokter')->on('dokter');
            $table->foreign('id_pasien')->references('id_pasien')->on('pasien');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
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