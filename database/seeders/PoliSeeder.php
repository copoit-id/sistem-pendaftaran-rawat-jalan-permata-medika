<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $polis = [
            'Poli Mata',
            'Poli Anak',
            'Poli Gigi',
            'Poli Bedah',
            'Poli Penyakit Dalam',
        ];

        foreach ($polis as $poli) {
            DB::table('poli')->insert([
                'nama_poli' => $poli,
            ]);
        }
    }
}