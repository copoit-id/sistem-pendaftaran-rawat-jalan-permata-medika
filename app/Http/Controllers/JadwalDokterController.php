<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    public function index(){
        $daftar_dokter = Dokter::with('jadwalDokter')->get()->sortBy('nama_dokter');
        $dokter_per_hari = [];
        foreach ($daftar_dokter as $dokter) {
            foreach ($dokter->jadwalDokter as $jadwal) {
                $dokter_per_hari[$jadwal->hari][] = [
                    'nama_dokter' => $dokter->nama_dokter,
                    'jadwal' => $jadwal->jadwal,
                    'hari' => $jadwal->hari,
                ];
            }
        }

        // Urutkan berdasarkan hari
        $order = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];
        uksort($dokter_per_hari, function($a, $b) use ($order) {
            return array_search($a, $order) - array_search($b, $order);
        });
        // return response()->json($daftar_dokter);

        return view('pages.jadwal-dokter', [
            'dokter_per_hari' => $dokter_per_hari
        ]);
    }
}
