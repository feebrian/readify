@extends('layout.auth')

@section('content')
    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="bg-[#F5F5F5] p-8 rounded-lg border-2 border-[#D9D9D9]">
            <h2 class="text-3xl font-bold">Login</h2>
            <h3 class="text-2xl font-medium mt-1">to discover readify</h3>

            <form action="#" method="POST">
                <div class="mt-6 flex flex-col">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1"
                        placeholder="johndoe">
                </div>

                <div class="mt-6 flex flex-col">
                    <label for="password">Password</label>
                    <input type="password" id="password" class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1"
                        placeholder="ssshh it's a secret">
                </div>
                <div class="flex justify-between items-center">
                    <div class="mt-6 inline items-center">
                        <input type="checkbox" class="top-0 left-0 " name="remeber_me" id="remember_me">
                        <p class="inline ml-1 text-sm">Remember me</p>
                    </div>
                    <div class="mt-6 inline items-center">
                        <a href="#" class="hover:underline text-sm">Forgot password?</a>
                    </div>
                </div>
                <button type="submit"
                    class="bg-blue-500 w-full p-4 text-white font-bold text-xl rounded mt-6 hover:bg-blue-600 transition ease-in-out duration-150">Log
                    In</button>
                <p class="text-sm mt-2 text-center">Don't have an account? <a href="/register"
                        class="underline text-blue-500">Sign Up</a></p>
            </form>
        </div>
    </div>
@endsection
