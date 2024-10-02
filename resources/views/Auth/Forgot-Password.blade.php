@extends('Auth.Auth')
@section('content')

<Section>
    <form action="" method="post">
        @csrf
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
                <button class="text-white rounded-[30px] bg-[#3380F5] py-1.5 px-4 right-0 justify-end items-end w-44"
                    type="submit">Send Reset Link</button>
            </div>
        </div>
    </form>
</Section>
@endsection