@extends('layouts.admin')

@section('title', 'Keluhan')
@section('content')
    <section id="keluhan" class="content">
        <div class="flex">
            <a href="/keluhan-pasien" class="block pl-4 pr-6 rounded-full py-1 bg-blue text-white text-[14px]"><i
                    class="ri-arrow-left-line mr-2 font-bold"></i>Kembali</a>
            <nav class="flex ml-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Form Keluhan Pasien
                        </a>
                    </li>

                </ol>
            </nav>
        </div>
        <div class="bg-white w-full mt-4 shadow-sm rounded-md px-4 py-8">
            <p class="text-center font-bold text-[20px] mb-4">Form Keluhan Pasien</p>
            <div>
                <form action="{{ route('addKeluhan') }}" method="post" class="mx-auto">
                    @csrf
                    <div class="pb-8 border-b-2 mb-4">
                        <div class="relative flex w-full gap-4">
                            <input name="nik" type="text" id="nik"
                                class="flex-1 block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Nomor Kependudukan" required />
                            <input name="nama_pasien" type="text" id="nama_pasien"
                                class="flex-1 block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Nama Pasien" required />
                            <input name="layanan_pembayaran" type="text" id="layanan_pembayaran"
                                class="flex-1 block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukan Layanan Pembayaran" required />
                        </div>
                        <div class="relative flex w-full gap-4 py-4">
                            <select id="jenis_kelamin" name="jenis_kelamin"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <select id="agama" name="agama"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Agama</option>
                                <option value="islam">Islam</option>
                                <option value="protestan">Kristen</option>
                                <option value="katolik">Katolik</option>
                                <option value="hindu">Hindu</option>
                                <option value="budha">Budha</option>
                                <option value="konghucu">Konghucu</option>
                            </select>
                            <select id="status_pernikahan" name="status_pernikahan"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Status Pernikahan</option>
                                <option value="sudah menikah">Sudah Menikah</option>
                                <option value="belum menikah">Belom Menikah</option>
                            </select>
                        </div>
                        <div class="flex justify-center">
                            <div id="btn-check-data-pasien"
                                class="bg-blue cursor-pointer text-center text-white px-4 w-[200px] py-2">Check
                                Data
                                Pasien</div>
                        </div>
                    </div>
                    <div class="py-4 flex gap-4">
                        <textarea name="keluhan_pasien" type="search" id="default-keluhan_pasien"
                            class="flex-1 w-full h-[150px] block p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukan keluhan pasien" required></textarea>
                        <div class="flex flex-1 flex-col items-center justify-start gap-4">
                            <select id="id_poli" name="id_poli"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Poli Tujuan</option>
                                @foreach ($daftar_poli as $poli)
                                    <option value="{{ $poli->id_poli }}">{{ $poli->nama_poli }}</option>
                                @endforeach
                            </select>
                            <select id="jadwal_dokter" name="jadwal_dokter"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Jadwal Tersedia</option>
                                <option value="laki-laki">07.00 - 09.00</option>
                                <option value="perempuan">09.00 - 10.00</option>
                                <option value="perempuan">10.00 - 11.00</option>
                            </select>
                            <div class="flex w-full mx-4 gap-4 items-center">
                                <button class="flex-1 bg-green-600 text-white px-4 py-2 rounded-md text-sm ">Tambah</button>
                                <button class="flex-1 bg-red-800 text-white px-4 py-2 rounded-md text-sm ">Batal</button>
                            </div>
                        </div>
                        <div class="flex flex-1 items-start">
                            <select id="id_dokter" name="id_dokter"
                                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Pilih Dokter</option>
                                @foreach ($daftar_dokter as $dokter)
                                    <option value="{{ $dokter->id_dokter }}">{{ $dokter->nama_dokter }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
