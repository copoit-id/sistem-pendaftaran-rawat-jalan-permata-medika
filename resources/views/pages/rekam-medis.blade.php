@extends('layouts.admin')

@section('title', 'Manajemen Dokter')
@section('content')
    <section class="content">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="table-dokter" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID Pasien
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ID Dokter
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keluhan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftar_keluhan as $keluhan)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $keluhan->id_pasien }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $keluhan->id_dokter }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $keluhan->keluhan_pasien }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
