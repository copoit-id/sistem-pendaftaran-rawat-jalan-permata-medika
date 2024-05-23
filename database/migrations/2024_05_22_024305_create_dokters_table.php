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
        Schema::create('dokter', function (Blueprint $table) {
            $table->id('id_dokter');
            $table->string('nama_dokter');
            $table->string('nomor_telepon');
            $table->enum('jenis_kelamin',['laki-laki', 'perempuan']);
            $table->string('alamat_lengkap');
            $table->string('jadwal_dokter');
            $table->BigInteger('id_poli')->unsigned();
            $table->foreign('id_poli')->references('id_poli')->on('poli');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter');
    }
};