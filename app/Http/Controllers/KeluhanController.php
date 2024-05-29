<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Keluhan;
use App\Models\Pasien;
use App\Models\Poli;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    public function index(){
        $daftar_dokter = Dokter::all();
        $daftar_poli = Poli::all();
        return view('pages.keluhan', [
            'daftar_dokter' => $daftar_dokter,
            'daftar_poli' => $daftar_poli,
        ]);
    }

    public function indexCetakAntrian(){
        return view('pages.cetak-antrian');
    }

    public function checkDataPasien($nik){
        $pasien = Pasien::where('nik', $nik)->first();

        if ($pasien) {
            return response()->json(['status' => 'success', 'data' => $pasien]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Patient not found']);
        }
    }

    public function addKeluhan(Request $request){
        $pasien = Pasien::where('nik', $request->nik)->first();
        Keluhan::create([
            'keluhan_pasien' => $request->keluhan_pasien,
            'id_dokter' => $request->id_dokter,
            'id_pasien' => $pasien->id_pasien,
            'id_petugas' => 1,
        ]);

        return redirect('/keluhan-pasien');
    }

    public function getDokterByPoli(Request $request) {
        $poli_id = $request->poli_id;
        $dokter_by_poli = Dokter::where('id_poli', $poli_id)->get();
        return response()->json($dokter_by_poli);
    }
}