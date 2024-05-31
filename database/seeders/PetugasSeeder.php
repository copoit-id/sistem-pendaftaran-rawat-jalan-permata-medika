<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Admin',
            'nomor_telepon' => '08123456789',
            'jenis_kelamin' => 'laki-laki',
            'alamat_lengkap' => 'Jember, Jawa Timur, Indonesia',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'nama' => 'Petugas 1',
            'nomor_telepon' => '08123456789',
            'jenis_kelamin' => 'perempuan',
            'alamat_lengkap' => 'Bandung, Jawa Barat, Indonesia',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('petugas123'),
            'role' => 'petugas'
        ]);
    }
}