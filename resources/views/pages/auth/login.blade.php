@extends('layout.auth')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="bg-[#F5F5F5] p-8 rounded-lg border-2 border-[#D9D9D9] shadow-md">
            <h2 class="text-3xl font-bold">Login</h2>
            <h3 class="mt-1 text-2xl font-medium">to discover readify</h3>

            <form action="{{ route('login.perform') }}" method="POST">
                @method('POST')
                @csrf
                <div class="flex flex-col mt-6">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder="example@somewhere.com" autofocus required>
                </div>

                <div class="flex flex-col mt-6">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        placeholder="ssshh it's a secret" required>
                </div>
                <div class="flex items-center justify-between">
                    <div class="items-center inline mt-6">
                        <input type="checkbox"
                            class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember_me" id="remember_me">
                        <p class="inline ml-1 text-sm">Remember me</p>
                    </div>
                    <div class="items-center inline mt-6">
                        <a href="#" class="text-sm hover:underline">Forgot password?</a>
                    </div>
                </div>
                <button type="submit"
                    class="w-full p-4 mt-6 text-xl font-bold text-white transition duration-150 ease-in-out bg-blue-500 rounded hover:bg-blue-600">Log
                    In</button>
                <p class="mt-2 text-sm text-center">Don't have an account? <a href="/register"
                        class="text-blue-500 underline">Sign Up</a></p>
            </form>
        </div>
    </div>
@endsection
