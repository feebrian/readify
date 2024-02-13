@extends('layout.app')

@section('content')
    <div class="flex justify-center mt-8 mb-8">
        <div class="flex justify-between gap-4">
            <input type="text" placeholder="Search..." class="px-4 py-2 rounded-md border-2 border-[#D9D9D9] bg-[#F5F5F5]">
            <select name="kategori" id="kategori"
                class="w-60 px-4 py-2 after:absolute after:right-4 rounded-md border-2 border-[#D9D9D9] bg-[#F5F5F5]">
                <option value="Horor">Horor</option>
                <option value="Aksi">Aksi</option>
                <option value="Komedi">Komedi</option>
            </select>
        </div>
    </div>

    <div class="px-4 py-6 mx-20 bg-white rounded-lg shadow-sm">
        <h2 class="mb-8 text-3xl font-semibold">Book lists</h2>
        <div class="mb-8 border-b border-gray-500 opacity-50 border-1"></div>
        <div class="grid grid-cols-6 gap-y-6 place-items-center">
            <div class="flex flex-col justify-between">
                <a href="/books/bumi-manusia">
                    <img src="/img/bumi-manusia.jpg" alt="bumi-manusia"
                        class="w-56 transition duration-150 ease-in-out rounded-lg h-80 hover:brightness-90">
                </a>
                <h3 class="mt-1 text-lg" title="{{ $title }}">{{ Str::limit($title, 20) }}</h3>
            </div>
            {{-- <div class="flex flex-col justify-between">
            <a href="/books/bumi-manusia">
                <img src="/img/love-in-the-fastlane.jpeg" alt="bumi-manusia"
                    class="w-56 transition duration-150 ease-in-out rounded-lg h-80 hover:scale-105">
            </a>
            <h3 class="mt-2 text-xl">Love in the Fast Lane</h3>
        </div>
        <div class="flex flex-col justify-between">
            <a href="/books/bumi-manusia">
                <img src="/img/pelakor.jpg" alt="bumi-manusia"
                    class="w-56 transition duration-150 ease-in-out rounded-lg h-80 hover:scale-105">
            </a>
            <h3 class="mt-2 text-xl">Bumi Manusia</h3>
        </div>
        <div class="flex flex-col justify-between">
            <a href="/books/bumi-manusia">
                <img src="/img/pulang.jpg" alt="bumi-manusia"
                    class="w-56 transition duration-150 ease-in-out rounded-lg h-80 hover:scale-105">
            </a>
            <h3 class="mt-2 text-xl">Bumi Manusia</h3>
        </div>
        <div class="flex flex-col justify-between">
            <a href="/books/bumi-manusia">
                <img src="/img/the-outsider.jpeg" alt="bumi-manusia"
                    class="w-56 transition duration-150 ease-in-out rounded-lg h-80 hover:scale-105">
            </a>
            <h3 class="mt-2 text-xl">Bumi Manusia</h3>
        </div>
        <div class="flex flex-col justify-between">
            <a href="/books/bumi-manusia">
                <img src="/img/the-reaping.jpg" alt="bumi-manusia"
                    class="w-56 transition duration-150 ease-in-out rounded-lg h-80 hover:scale-105">
            </a>
            <h3 class="mt-2 text-xl">Bumi Manusia</h3>
        </div>
         --}}
        </div>
    </div>
@endsection
