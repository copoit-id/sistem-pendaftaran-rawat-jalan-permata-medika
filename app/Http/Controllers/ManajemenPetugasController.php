<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenPetugasController extends Controller
{
    public function index(){
        return view('pages.manajemen-petugas');
    }
    public function indexInput(){
        return view('pages.manajemen-petugas-input');
    }
}