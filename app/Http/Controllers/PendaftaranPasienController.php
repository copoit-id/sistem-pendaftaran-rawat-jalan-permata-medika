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

}