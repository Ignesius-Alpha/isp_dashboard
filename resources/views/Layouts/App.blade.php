<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @media only screen and (max-width: 767px) and (orientation: portrait) {
            #app {
                display: none;
            }

            .rotate-message {
                display: flex;
                justify-content: center;
                padding-left: 10%;
                padding-right: 10%;
                align-items: center;
                height: 100vh;
                text-align: center;
                background-color: #f8f9fa;
                font-size: 20px;
                color: #333;
            }
        }

        @media only screen and (max-width: 767px) and (orientation: landscape) {
            .rotate-message {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="flex-1 h-full">
            <nav-bar :user-name="{{ json_encode($userName) }}" class=""></nav-bar>
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

    <div class="rotate-message" style="display: none;">
        Please rotate your device to landscape mode for the best experience.
    </div>

    <script>
        function checkOrientation() {
            if (window.matchMedia("(max-width: 767px)").matches) {
                if (window.matchMedia("(orientation: portrait)").matches) {
                    document.querySelector('#app').style.display = 'none';
                    document.querySelector('.rotate-message').style.display = 'flex';
                } else {
                    document.querySelector('#app').style.display = 'flex';
                    document.querySelector('.rotate-message').style.display = 'none';
                }
            } else {
                document.querySelector('#app').style.display = 'flex';
                document.querySelector('.rotate-message').style.display = 'none';
            }
        }

        window.addEventListener("load", checkOrientation);
        window.addEventListener("orientationchange", checkOrientation);
        window.addEventListener("resize", checkOrientation);
    </script>
</body>

</html>