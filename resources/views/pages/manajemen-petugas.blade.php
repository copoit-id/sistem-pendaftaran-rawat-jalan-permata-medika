@extends('layouts.admin')

@section('title', 'Manajemen Dokter')
@section('content')
    <section class="content">
        <div class="flex">
            <a href="/manajemen-petugas/input-petugas"
                class="bg-blue text-white px-4 py-2 mb-4 block rounded-md text-sm me-4">+ Tambah
                Petugas</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="table-dokter" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Petugas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Telepon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Kelamin
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Alamat Lengkap
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($daftar_petugas)
                        @foreach ($daftar_petugas as $petugas)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $petugas->nama_petugas }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $petugas->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $petugas->nomor_telepon }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $petugas->jenis_kelamin }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $petugas->alamat_lengkap }}
                                </td>
                                <td class="px-2 py-4">
                                    <a href="/manajemen-petugas/edit-petugas/{{ $petugas->id_petugas }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="/manajemen-petugas/delete-petugas/{{ $petugas->id_petugas }}"
                                        class="font-medium text-red-700 dark:text-blue-500 hover:underline">Hapus</a>

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>data kosong</p>
                    @endif

                </tbody>
            </table>
        </div>
    </section>
@endsection
