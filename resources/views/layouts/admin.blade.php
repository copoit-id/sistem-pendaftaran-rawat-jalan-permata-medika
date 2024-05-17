<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <title>@yield('title')</title>

</head>
@php
    $title = 'Dashboard';
@endphp

<body class="grid grid-cols-[300px,1fr]">
    <div class="w-[300px] p-[0]">
        @include('component.sidebar')
    </div>
    <div class="bg-gray-50 w-full relative">
        <header class="w-full absolute">
            @include('component.navbar', ['title' => $title])
        </header>
        @yield('content')
        {{-- @include('sweetalert::alert') --}}
    </div>

    <script src="/js/datatable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
