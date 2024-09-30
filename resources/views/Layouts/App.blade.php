<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ISP_Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    {{-- Symbols/Icons --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Asset Bundling -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    <div id="app" class="">
        <div class="flex-1 h-full">
            <nav-bar class=""></nav-bar>
            <side-bar></side-bar>
            <div id="content" class="bg-[#173D6B] z-10 bg-opacity-20 max-h-full overflow-x-hidden overflow-y-auto">
                <dashboard-layout>
                    <template v-slot:content>
                        @yield('content')
                    </template>
                </dashboard-layout>
            </div>
        </div>
    </div>
</body>

</html>