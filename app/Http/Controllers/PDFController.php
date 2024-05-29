<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index(){
        $path = base_path('public/img/nomor-antrean.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return view('component.nomor-antrian', compact('pic'));
    }
    public function generatePDF()
    {
        $nomor = 1;

        $path = base_path('public/img/nomor-antrean.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);

        $pdf = Pdf::loadView('component.nomor-antrian', compact('pic'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('users-lists.pdf');
    }
}