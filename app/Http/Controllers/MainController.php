<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class MainController extends Controller
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

        $daftar_poli = Poli::all();
        return view('pages.index', [
            'dokter_per_hari' => $dokter_per_hari,
            'daftar_poli' => $daftar_poli
        ]);
    }
}