@extends('layout.auth')

@section('content')
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="bg-[#F5F5F5] p-8 rounded-lg border-2 border-[#D9D9D9]">
            <h2 class="text-3xl font-bold">Register</h2>
            <h3 class="mt-1 text-2xl font-medium">to get started on readify</h3>

            <form action="{{ route('register.perform') }}" method="POST">
                @method('POST')
                @csrf
                <div class="flex flex-col mt-6">
                    <label for="email">Email</label>
                    <input name="email" type="text" id="email"
                        class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1" placeholder="example@somewhere.com"
                        value="{{ old('email') }}" required autofocus>
                </div>

                <div class="flex flex-col mt-6">
                    <label for="text">Name</label>
                    <input name="name" type="text" id="name"
                        class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1" placeholder="John Doe"
                        value="{{ old('name') }}" required>
                </div>

                <div class="flex flex-col mt-6">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="password"
                        class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1" placeholder="ssshh it's a secret"
                        required>
                </div>

                <div class="flex flex-col mt-6">
                    <label for="repeat_password">Repeat password</label>
                    <input name="repeat_password" type="password" id="repeat_password"
                        class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1" placeholder="ssshh it's a secret"
                        required>
                </div>
                <button type="submit"
                    class="w-full p-4 mt-6 text-xl font-bold text-white transition duration-150 ease-in-out bg-blue-500 rounded hover:bg-blue-600">Sign
                    Up</button>
                <p class="mt-2 text-sm text-center">Already have an account? <a href="/login"
                        class="text-blue-500 underline">Sign In</a></p>
            </form>
        </div>
    </div>
@endsection
