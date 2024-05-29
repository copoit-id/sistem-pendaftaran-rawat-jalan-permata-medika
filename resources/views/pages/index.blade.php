<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Medika Center</title>

</head>
@php
    $title = 'Medika Indah';
@endphp

<body>
    <header class="w-full">
        <nav class="flex w-full justify-between items-center bg-blue px-[100px] py-[20px] text-white">
            <img src="/img/logo.png" alt="" class="w-[190px]">
            <div class="max-w-[400px]">
                <p class="font-thin">Alamat</p>
                <p class="font-semibold">Jl. Mastrip, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa
                    Timur 68121</p>
            </div>
            <div class="max-w-[400px]">
                <p class="font-thin">Nomor Telepon</p>
                <p class="font-semibold">0812-3456-7890</p>
            </div>
            </div>
            <p class="px-[70px] py-2 bg-slate-200 text-black rounded-full">Login</p>
        </nav>
    </header>
    <section class="flex flex-col items-center justify-center py-[150px] gap-4">
        <h1 class="text-[20px] font-bold">Check Jadwal Dokter</h1>
        <p>Silahkan pilih poli dan tanggal tujuan, lalu klik tombol "Cari Jadwal"</p>
        <div class="flex max-w-[500px] gap-4">
            <select id="countries_disabled" name="poli"
                class="flex-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Poli</option>
                <option value="poli_mata">Poli Mata</option>
                <option value="poli_telinga">Poli Telinga</option>
                <option value="poli_hidung">Poli Hidung</option>
            </select>
            <button class="flex-1 bg-green-600 text-white px-4 py-2 rounded-md text-sm ">Tambah</button>
        </div>

        <table id="table-dokter"
            class="w-[1000px] border text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Hari</th>
                    <th scope="col" class="px-6 py-3">Jadwal Dokter</th>
                    <th scope="col" class="px-6 py-3">Nama Dokter</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dokter_per_hari as $hari => $jadwals)
                    @foreach ($jadwals as $index => $jadwal)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            @if ($index == 0)
                                <td class="px-6 py-4 border-r text-center w-4" rowspan="{{ count($jadwals) }}">
                                    {{ $loop->parent->index + 1 }}
                                </td>
                                <td class="px-6 py-4 border-r text-center" rowspan="{{ count($jadwals) }}">
                                    {{ $jadwal['hari'] }}
                                </td>
                            @endif
                            <td class="px-6 py-4 border-r">{{ $jadwal['jadwal'] }}</td>
                            <td class="px-6 py-4">{{ $jadwal['nama_dokter'] }}</td>
                        </tr>
                    @endforeach
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center">Data kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>
    <footer class="bg-blue py-[50px] px-[120px] text-white flex justify-between">
        <div>
            <img src="/img/logo.png" alt="" class="w-[190px]">
            <p class="font-thin max-w-[400px]">Website Resmi Klinik Medika Indah
                www.medikaindahCC.com</p>
        </div>
        <div class="flex flex-col gap-1">
            <p class="text-[20px] font-semibold">Kontak</p>
            <p class="max-w-[400px] font-thin">Jl. Mastrip, Krajan Timur, Sumbersari, Kec. Sumbersari, Kabupaten Jember,
                Jawa
                Timur 68121</p>
            <span class="flex items-center gap-2">
                <i class="ri-mail-fill text-[26px]"></i>
                <p>medikainadahCC@gmail.com</p>
            </span>
            <span class="flex items-center gap-2">
                <i class="ri-phone-fill  text-[26px]"></i>
                <p>0812345678911</p>
            </span>
        </div>
        <div>
            <p class="text-[20px] font-semibold mb-2">Maps</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.4241018885846!2d113.72049837558706!3d-8.159955091870744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695b617d8f623%3A0xf6c4437632474338!2sPoliteknik%20Negeri%20Jember!5e0!3m2!1sid!2sid!4v1716954088977!5m2!1sid!2sid"
                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
