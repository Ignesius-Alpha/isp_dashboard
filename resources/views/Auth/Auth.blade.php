<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CA-ISP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Asset Bundling -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app" class="flex bg-[#173D6B] bg-opacity-20 w-screen h-screen">
        <div class="relative xl:block hidden md:hidden sm:hidden xs:hidden w-1/2 ">
            <img class="relative w-full h-full bg-center" src="{{asset('assets/bg/bg.png')}}" alt="">
            <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/5"
                src="{{asset('assets/logo/ca_logo.svg')}}" alt="">
        </div>
        <div class="w-full xl:w-1/2 p-4 lg:p-16 2xl:p-32 flex flex-col justify-center xl:justify-center overflow-y-auto">
            <div class="flex flex-col w-96 xl:w-full mx-auto">
                <img class="flex xl:hidden size-16 md:size- w-full justify-center items-center mb-14"
                    src="{{asset('assets/logo/ca_logo.svg')}}" alt="">
                <div class="mx-9 md:mx-xl:justify-center justify-center">
                    <div class="mb-10 2xl:mb-16 xl:mx-28 2xl:mx-36 text-center">
                        <h2 class="font-bold text-[#173D6B] text-xl">Welcome to Clear Access ISP Portal</h2>
                        <p class="text-[#173D6B] text-sm">The purpose of this platform is to enable Internet Service
                            Providers to
                            conveniently oversee their Clear Access fibre services through an online interface. To
                            proceed,
                            kindly
                            provide your self-administration email address OR username and password in the designated
                            fields, and
                            then click the ‘Login’ button.

                        </p>
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>