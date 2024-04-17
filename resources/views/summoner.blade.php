<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1&display=swap" rel="stylesheet">

    <!-- Material UI Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="grid grid-cols-12 grid-rows-12 h-screen">
        @include('components.navbar/navbar')

        <x-summoner-league class="col-start-3 col-span-3 row-start-5"/>



    </div>
    <div>


    {{-- <div class="grid grid-cols-12 grid-rows-12 h-screen">
        <div class="col-start-6 col-span-1 row-start-6 row-span-1 bg-[red]"></div>
        <div class="col-start-1 col-span-3 row-start-1 row-span-3 bg-[blue]"></div>
    </div> --}}


</body>
</html>
