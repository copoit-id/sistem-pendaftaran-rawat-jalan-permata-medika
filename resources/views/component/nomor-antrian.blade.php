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
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 185mm;
            height: 272mm;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .container p {
            position: absolute;
            font-size: 150px;
            font-weight: bold;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            color: black;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ $pic }}" alt="">
        <p>{{ $nomor_antrian }}</p>
    </div>
</body>

</html>
