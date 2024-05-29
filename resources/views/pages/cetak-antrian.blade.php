@extends('layouts.admin')

@section('title', 'Keluhan')
@section('content')
    <section id="cetak-antrian" class="content">
        <div class="w-full h-full bg-white flex flex-col gap-8 justify-center items-center">
            <img src="/img/success.png" class="w-[150px] h-[150px]" alt="">
            <p class="text-lg mt-[-50px] text-slate-700">Berhasil menambahkan keluhan pasien!</p>
            <a href="/download-pdf" class="px-8 py-3 bg-blue-500 text-white rounded-lg ">Cetak Nomor Antrian</a>
        </div>
    </section>
@endsection
