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
        // Schema::create('dokter', function (Blueprint $table) {
        //     $table->BigInteger('id_poli')->unsigned();
        //     $table->foreign('id_poli')->references('id_poli')->on('poli');
        // });
        // Schema::create('keluhan', function (Blueprint $table) {
        //     $table->BigInteger('id_dokter')->unsigned();
        //     $table->BigInteger('id_pasien')->unsigned();
        //     $table->BigInteger('id_petugas')->unsigned();
        //     $table->foreign('id_dokter')->references('id_dokter')->on('dokter');
        //     $table->foreign('id_pasien')->references('id_pasien')->on('pasien');
        //     $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
        // });
        // Schema::create('jadwal_dokter', function (Blueprint $table) {
        //     $table->BigInteger('id_dokter')->unsigned();
        //     $table->foreign('id_dokter')->references('id_dokter')->on('dokter');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foreign_key');
    }
};