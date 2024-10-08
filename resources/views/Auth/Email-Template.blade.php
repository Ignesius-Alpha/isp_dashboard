@extends('Auth.Auth')
@section('content')

<Section>
    <div class="container mx-auto">
        <div class="max-w-md mx-auto bg-white dark:bg-gray-700 rounded-[30px] shadow-xl">
            <div class="bg-primary text-gray-700 dark:text-white text-center py-4 rounded-t-lg">
                <div class="relative flex items-center justify-center my-14">
                    <img class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/5"
                src="{{asset('assets/logo/ca_logo.svg')}}" alt="">
                </div>
                <h1 class="text-2xl font-bold font-quicksand uppercase">ISP Portal</h1>
                <h1 class="text-xl font-medium">Password Reset Request</h1>
            </div>
            <div class="p-6">
                {{-- <p class="text-gray-700">Hi {{ $user->name }},</p> --}}
                <p class="text-gray-700 dark:text-white">Hi Ignesius, <br><br></p>
                <p class="text-gray-700 dark:text-white mb-4">We received a request to reset your password. Click the button below to reset it:</p>
                {{-- <a href="{{ $resetUrl }}" --}}
                <div class="flex items-center justify-center my-8">
                    <a href="{{route('reset-password')}}"
                        class="bg-[#3380F5] text-white font-semibold py-2 px-8 rounded-[30px] hover:bg-blue-600 transition duration-200">
                        Reset Password
                    </a>
                </div>
                <p class="text-gray-700 dark:text-white mt-4">If you didn’t request a password reset, you can ignore this email.<br><br></p>
                <p class="text-gray-700 dark:text-white">Best Regards,<br>Clear Access Dev Team</p>
                <a href="tel:{{ '+27 12 941 4000' }}" class="text-color dark:text-white">{{ '+27 12 941 4000' }}</a>
            </div>
            <div class="bg-gray-100 dark:bg-gray-100 text-center py-4 rounded-b-[30px]">
                <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} Clear Access. All rights reserved.</p>
            </div>
        </div>
    </div>
</Section>
@endsection