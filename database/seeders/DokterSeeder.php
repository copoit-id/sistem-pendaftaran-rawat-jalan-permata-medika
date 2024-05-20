<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokter')->insert([
            [
                'nama_dokter' => 'Dr. John Doe',
                'nomor_telepon' => '081234567890',
                'jenis_kelamin' => 'laki-laki',
                'alamat_lengkap' => 'Jl. Kebon Jeruk No. 123, Jakarta',
                'jadwal_dokter' => 'Senin, Rabu, Jumat',
                'id_poli' => 1,
            ],
            [
                'nama_dokter' => 'Dr. Jane Smith',
                'nomor_telepon' => '082345678901',
                'jenis_kelamin' => 'perempuan',
                'alamat_lengkap' => 'Jl. Mangga Dua No. 456, Surabaya',
                'jadwal_dokter' => 'Selasa, Kamis, Sabtu',
                'id_poli' => 2,
            ],
            [
                'nama_dokter' => 'Dr. Robert Brown',
                'nomor_telepon' => '083456789012',
                'jenis_kelamin' => 'laki-laki',
                'alamat_lengkap' => 'Jl. Melati No. 789, Bandung',
                'jadwal_dokter' => 'Senin, Rabu, Jumat',
                'id_poli' => 3,
            ],
            [
                'nama_dokter' => 'Dr. Emily Clark',
                'nomor_telepon' => '084567890123',
                'jenis_kelamin' => 'perempuan',
                'alamat_lengkap' => 'Jl. Mawar No. 101, Yogyakarta',
                'jadwal_dokter' => 'Selasa, Kamis, Sabtu',
                'id_poli' => 4,
            ],
            [
                'nama_dokter' => 'Dr. Michael Lee',
                'nomor_telepon' => '085678901234',
                'jenis_kelamin' => 'laki-laki',
                'alamat_lengkap' => 'Jl. Tulip No. 202, Medan',
                'jadwal_dokter' => 'Senin, Rabu, Jumat',
                'id_poli' => 5,
            ],
        ]);
    }
}