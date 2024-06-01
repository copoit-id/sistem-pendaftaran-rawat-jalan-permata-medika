<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="/build/assets/app.css">
    {{-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
</head>

<body class="w-full h-[100dvh]">
    <section id="login" class="flex">
        <div
            class="w-1/2 h-[100vh] bg-blue rounded-r-[50px] hidden lg:flex flex-col gap-12 justify-center items-center">
            <img src="/img/logo-login.png" alt="" class="w-[450px] h-[450px]">
            <p class="w-[450px] text-white text-center font-thin text-[18px]">Aplikasi Medika Center merupakan aplikasi
                pendaftaftaran pasien
                yang sangat memudahkan
                dalam melakukan
                pendataan rekam medis</p>
        </div>
        <div class="w-1/2 h-[100vh] py-[50px] flex justify-center items-center">
            <div class="w-full flex justify-center flex-col items-center">
                <h1 class="text-center font-bold text-[28px] text-navy">LOGIN PAGE</h1>
                <p class="w-[450px] text-center font-light mb-[30px]">Masukan email dan password dengan benar</p>
                <form action="/authenticate" method="POST"
                    class="flex flex-col justify-center w-full px-8 sm:px-14 sm:max-w-[650px] md:px-16">
                    @csrf
                    <span class="flex flex-col gap-2 mb-5">
                        <label for="email" class="font-semibold text-[18px]">Email</label>
                        <input type="text" name="email" id="email" class="border border-grey4 w-full px-5 py-4"
                            placeholder="Masukan email Anda!">
                        @error('email')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </span>
                    <span class="flex flex-col gap-2">
                        <label for="password" class="font-semibold text-[18px]">Password</label>
                        <input type="password" name="password" id="password"
                            class="border border-grey4 w-full px-5 py-4" placeholder="Masukan password Anda!">
                        @error('password')
                            <p class="text-red">{{ $message }}</p>
                        @enderror
                    </span>
                    <span class="flex justify-center">
                        <button type="submit"
                            class="bg-blue-900 mt-8 w-[250px] text-center py-2 font-semibold text-white">LOGIN</button>
                    </span>
                </form>
            </div>
        </div>
    </section>
    <script src="/build/assets/app.js"></script>
</body>

</html>
