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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id('id_pasien');
            $table->string('nama_pasien');
            $table->char('nik', 16);
            $table->enum('jenis_kelamin',['laki-laki', 'perempuan']);
            $table->string('nama_ibu_kandung');
            $table->enum('agama',['islam', 'protestan', 'katolik', 'budha', 'konghucu', 'hindu']);
            $table->enum('pendidikan',['SD', 'SMP', 'SMA', 'S1', 'S2', 'S3']);
            $table->enum('status_pernikahan',['belum menikah', 'sudah menikah']);
            $table->char('kode_pos', 5);
            $table->date('tanggal_lahir');
            $table->string('nomor_telepon');
            $table->string('alamat_lengkap');
            $table->string('layanan_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};