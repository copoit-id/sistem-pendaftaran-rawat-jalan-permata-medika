<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranPasienController extends Controller
{
    public function index(){
        return view('pages.pendaftaran-pasien');
    }
}