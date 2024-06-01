<?php

namespace App\Http\Controllers;

use App\Models\NomorAntrian;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function index(){
        $path = base_path('public/img/nomor-antrean2.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $nomor_antrian = NomorAntrian::count();
        return view('component.nomor-antrian', compact('pic', 'nomor_antrian'));
    }

    public function generatePDF()
    {
        $nomor = 1;

        $path = base_path('public/img/nomor-antrean2.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $nomor_antrian = NomorAntrian::count();
        $pdf = Pdf::loadView('component.nomor-antrian', compact('pic', 'nomor_antrian'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('nomor-antrian.pdf');
    }

}