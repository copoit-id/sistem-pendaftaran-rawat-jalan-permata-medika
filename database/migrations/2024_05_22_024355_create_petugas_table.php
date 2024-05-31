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
        // Schema::create('petugas', function (Blueprint $table) {
        //     $table->id('id_petugas');
        //     $table->string('nama_petugas');
        //     $table->string('nomor_telepon');
        //     $table->enum('jenis_kelamin',['laki-laki', 'perempuan']);
        //     $table->string('alamat_lengkap');
        //     $table->string('email')->unique();
        //     $table->text('password');
        //     $table->enum('role', ['admin', 'petugas'])->default('petugas');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};