<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenDokterController extends Controller
{
    public function index(){
        return view('pages.manajemen-dokter');
    }
    public function indexInput(){
        return view('pages.manajemen-dokter-input');
    }
}