@extends('Auth.Auth')
@section('content')

<Section>
    <form action="" method="post">
        @csrf
        <!-- Password Reset Token -->
        {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}
        <div class="xl:mx-28 2xl:mx-36 flex flex-col space-y-4">
            <h2 class="font-bold text-[#173D6B] text-xl">Reset Password</h2>
            @include('_message')
            <input
                class="rounded-[30px] px-5 py-2 border border-gray-500 bg-transparent text-[#173D6B] placeholder:text-[#173D6B] placeholder:text-opacity-50"
                placeholder="New password" type="password" id="password" required />
            <input
                class="rounded-[30px] px-5 py-2 border border-gray-500 bg-transparent text-[#173D6B] placeholder:text-[#173D6B] placeholder:text-opacity-50"
                placeholder="New passsword confirmation" type="password" id="passwordconfirm" required />
            <div class="flex flex-row justify-end items-center">
                <button class="text-white rounded-[30px] bg-[#3380F5] py-1.5 px-4 right-0 justify-end items-end w-44"
                type="submit">Reset</button>
            </div>
            <a href="{{route('login')}}" class="text-[#173D6B] text-sm underline">Return to Login</a>
        </div>
    </form>
</Section>
@endsection