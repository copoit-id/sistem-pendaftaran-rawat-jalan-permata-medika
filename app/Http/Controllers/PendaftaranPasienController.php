<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PendaftaranPasienController extends Controller
{
    public function index(){
        return view('pages.pendaftaran-pasien');
    }

    public function addPasien(Request $request){
        $query_pasien = Pasien::create($request->all());
        if($query_pasien){
            return redirect('/pendaftaran-pasien');
        }
    }

    public function checkDataPasien($nik){
        dd("halo");
        $pasien = Pasien::where('nik', $nik)->first();

        if ($pasien) {
            return response()->json(['status' => 'success', 'data' => $pasien]);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Patient not found']);
        }
    }
}