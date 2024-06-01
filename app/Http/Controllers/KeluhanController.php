<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\JadwalDokter;
use App\Models\Keluhan;
use App\Models\NomorAntrian;
use App\Models\Pasien;
use App\Models\Poli;
use GuzzleHttp\Promise\Create;
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
        $nomor_antrian = NomorAntrian::count();

        return view('pages.cetak-antrian', [
            'nomor_antrian' => $nomor_antrian + 1
        ]);
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

        return redirect('/keluhan-pasien/cetak-antrian');
    }

    public function addAntrian(Request $request){
        $antrian = NomorAntrian::create([
            'nomor_antrian' => $request->nomor_antrian
        ]);
        return redirect('/download-pdf');
    }

    public function resetAntrian(){
        NomorAntrian::truncate();
        return redirect('/keluhan-pasien/cetak-antrian');
    }

   public function getDokter($id_dokter){
        $jadwal_dokter = JadwalDokter::where('id_dokter', $id_dokter)->get();
        return response()->json($jadwal_dokter);
   }
}