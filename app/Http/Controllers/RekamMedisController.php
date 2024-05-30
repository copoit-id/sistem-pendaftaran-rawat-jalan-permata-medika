<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index(){
        $daftar_keluhan = Keluhan::all();
        return view('pages.rekam-medis',[
            'daftar_keluhan' => $daftar_keluhan
        ]);
    }
}