@extends('layout.auth')

@section('content')
    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class="bg-[#F5F5F5] p-8 rounded-lg border-2 border-[#D9D9D9]">
            <h2 class="text-3xl font-bold">Register</h2>
            <h3 class="text-2xl font-medium mt-1">to get started on readify</h3>

            <form action="{{ route('authentication') }}" method="POST">
                @method('POST')
                @csrf
                <div class="mt-6 flex flex-col">
                    <label for="username">Username</label>
                    <input name="username" type="text" id="username"
                        class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1" placeholder="johndoe" required>
                </div>

                <div class="mt-6 flex flex-col">
                    <label for="text">Name</label>
                    <input name="name" type="text" id="name"
                        class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1" placeholder="John Doe" required>
                </div>

                <div class="mt-6 flex flex-col">
                    <label for="password">Password</label>
                    <input name="password" type="password" id="password"
                        class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1" placeholder="ssshh it's a secret"
                        required>
                </div>

                <div class="mt-6 flex flex-col">
                    <label for="repeat_password">Repeat password</label>
                    <input name="repeat_password" type="password" id="repeat_password"
                        class="py-4 px-6 rounded-lg border-2 border-[#D9D9D9] mt-1" placeholder="ssshh it's a secret"
                        required>
                </div>
                <button type="submit"
                    class="bg-blue-500 w-full p-4 text-white font-bold text-xl rounded mt-6 hover:bg-blue-600 transition ease-in-out duration-150">Sign
                    Up</button>
                <p class="text-sm mt-2 text-center">Already have an account? <a href="/login"
                        class="underline text-blue-500">Sign In</a></p>
            </form>
        </div>
    </div>
@endsection
