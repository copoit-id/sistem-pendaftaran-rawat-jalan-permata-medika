<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekamMedisController extends Controller
{
    public function index(){
        return view('pages.rekam-medis');
    }
}