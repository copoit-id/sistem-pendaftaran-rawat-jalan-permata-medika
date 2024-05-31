<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index($id_poli = null){
        // Filter dokter berdasarkan id_poli jika parameter diberikan
        if ($id_poli) {
            $daftar_dokter = Dokter::with(['jadwalDokter'])
                ->where('id_poli', $id_poli)
                ->get()
                ->sortBy('nama_dokter');
        } else {
            $daftar_dokter = Dokter::with(['jadwalDokter'])
                ->get()
                ->sortBy('nama_dokter');
        }

        foreach($daftar_dokter as $dokter){
            $poli = Poli::where('id_poli', $dokter->id_poli)->first();
            $dokter->nama_poli = $poli->nama_poli;
        }

        $dokter_per_hari = [];
        $daysOfWeek = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];

        foreach ($daysOfWeek as $day) {
            $dokter_per_hari[$day] = [];
        }

        foreach ($daftar_dokter as $dokter) {
            foreach ($dokter->jadwalDokter as $jadwal) {
                $dokter_per_hari[$jadwal->hari][] = [
                    'nama_dokter' => $dokter->nama_dokter,
                    'nama_poli' => $dokter->nama_poli,
                    'jadwal' =>  substr($jadwal->jadwal_mulai, 0, 5) . ' - ' . substr($jadwal->jadwal_selesai, 0, 5),
                    'hari' => $jadwal->hari,
                ];
            }
        }

        $daftar_poli = Poli::all();

        return view('pages.index', [
            'dokter_per_hari' => $dokter_per_hari,
            'daftar_poli' => $daftar_poli
        ]);
    }
}