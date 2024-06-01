@extends('layouts.admin')

@section('title', 'Keluhan')
@section('content')
    <section id="cetak-antrian" class="content">
        <div class="w-full h-full bg-white flex flex-col gap-8 justify-center items-center ">
            <div class="bg-slate-100 rounded-lg px-24 border py-10 flex flex-col gap-8 justify-center items-center">
                <img src="/img/success.png" class="w-[150px] h-[150px]" alt="">
                <p class="text-lg mt-[-20px] text-slate-700">Berhasil menambahkan keluhan pasien!</p>
                <div class="flex gap-2">
                    <form action="{{ route('addAntrian') }}" method="post">
                        @csrf
                        <input hidden name="nomor_antrian" type="text" value="{{ $nomor_antrian }}">
                        <button href="/download-pdf" id="cetak-nomor-antrian"
                            class="px-8 py-3 bg-blue-500 text-white rounded-lg ">Cetak Nomor Antrian</button>
                    </form>
                    <form action="{{ route('resetAntrian') }}" method="get">
                        @csrf
                        <button class="px-8 py-3 bg-red-800 text-white rounded-lg ">Reset Antrian</button>
                    </form>
                </div>
            </div>

            <span class="text-center">
                <p class="mt-[-10px] text-gray-700">Antrian Sekarang: </p>
                <p class="text-[40px] font-bold">{{ $nomor_antrian }}</p>
            </span>
        </div>
    </section>
@endsection
