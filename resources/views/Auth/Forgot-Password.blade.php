<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    <!-- Asset Bundling -->
    @vite(['resources/css/compiled_app.css', 'resources/js/app.js'])
</head>

<body>
    <div id="app" class="flex w-screen h-screen">
        <div class="relative hidden xl:block w-1/2 ">
            <img class="relative w-full h-full bg-center" src="{{asset('assets/bg/bg.png')}}" alt="">
            <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/5"
                src="{{asset('assets/logo/ca_logo.svg')}}" alt="">
        </div>
        <div class="w-96 xl:w-1/2 p-4 lg:p-16 2xl:p-32 justify-center flex flex-col">
            <img class="flex xl:hidden w-full justify-center items-center mb-14"
                src="{{asset('assets/logo/ca_logo.svg')}}" alt="">
            <div class="justify-center">
                <div class="mb-10 2xl:mb-16 xl:mx-28 2xl:mx-36 text-center">
                    <h2 class="font-bold text-[#173D6B] text-xl">Welcome to Clear Access ISP Portal</h2>
                    <p class="text-[#173D6B] text-sm">The purpose of this platform is to enable Internet Service
                        Providers to
                        conveniently oversee their Clear Access fibre services through an online interface. To proceed,
                        kindly
                        provide your self-administration email address OR username and password in the designated
                        fields, and
                        then click the ‘Login’ button.

                    </p>
                </div>
                <form action="" method="post">
                    <div class="xl:mx-28 2xl:mx-36 flex flex-col space-y-4">
                        <h2 class="font-bold text-[#173D6B] text-xl">Reset Password</h2>
                        <input
                            class="rounded-[30px] px-5 py-2 border border-gray-500 bg-transparent text-[#173D6B] placeholder:text-[#173D6B] placeholder:text-opacity-50"
                            placeholder="Email Address / Username" type="email" id="email" required />
                        <input
                            class="rounded-[30px] px-5 py-2 border border-gray-500 bg-transparent text-[#173D6B] placeholder:text-[#173D6B] placeholder:text-opacity-50"
                            placeholder="Confirm Email Address / Username" type="email" id="email" required />
                        <div class="flex flex-row justify-between items-center">
                            <a href="{{route('login')}}" class="text-[#173D6B] text-sm underline">Return to Login</a>
                            <button
                                class="text-white rounded-[30px] bg-[#3380F5] py-1.5 px-4 right-0 justify-end items-end w-44"
                                type="submit">Send Reset Link</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>