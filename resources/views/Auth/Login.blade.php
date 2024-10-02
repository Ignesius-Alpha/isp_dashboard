@extends('Auth.Auth')
@section('content')

<Section>
    <form action="" method="post">
        @csrf
        <div class="xl:mx-28 2xl:mx-36 flex flex-col space-y-4">
            <h2 class="font-bold text-[#173D6B] text-2xl">Login</h2>
            @include('_message')
            <input
                class="rounded-[30px] px-5 py-2 border border-gray-400 bg-transparent text-[#173D6B] placeholder:text-[#173D6B] placeholder:text-opacity-50"
                placeholder="Email Address / Username" type="email" name="email" id="email" required />
            <input
                class="rounded-[30px] px-5 py-2 border border-gray-400 bg-transparent text-[#173D6B] placeholder:text-[#173D6B] placeholder:text-opacity-50"
                placeholder="Password" type="password" name="password" id="password" required />
            <label class="flex gap-x-2 text-[#173D6B] items-center justify-start">
                <input type="checkbox" name="remember" id="rememberMe"
                    class="form-check border-gray-400 bg-transparent text-[#173D6B] placeholder:text-[#173D6B] placeholder:text-opacity-50 border size-5 bg-amber-300">
                Remember me</label>
            <div class="flex flex-row justify-between items-center">
                <a href="{{route('forgot-password')}}" class="text-[#173D6B] text-sm underline">Forgot
                    Password?</a>
                <button type="submit"
                    class="text-white rounded-[30px] bg-[#3380F5] py-1.5 px-8 justify-end w-28">Login</button>
            </div>
        </div>
    </form>
</Section>
@endsection