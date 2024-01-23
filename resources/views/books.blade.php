@extends('layout.app')

@section('content')
    <div class="flex justify-center mb-8 mt-8">
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

    <div class="bg-white mx-20 px-4 py-6 rounded-lg shadow-sm">
        <h2 class="text-3xl font-semibold mb-8">Book lists</h2>
        <div class="border-b border-1 border-gray-500 opacity-50 mb-8"></div>
        <div class="grid grid-cols-6 gap-y-6 place-items-center">
            <div class="flex justify-between flex-col">
                <a href="/books/bumi-manusia">
                    <img src="/img/bumi-manusia.jpg" alt="bumi-manusia"
                        class="w-56 h-80 rounded-lg hover:brightness-90 transition ease-in-out duration-150">
                </a>
                <h3 class="text-lg mt-1" title="{{ $title }}">{{ Str::limit($title, 20) }}</h3>
            </div>
            {{-- <div class="flex justify-between flex-col">
            <a href="/books/bumi-manusia">
                <img src="/img/love-in-the-fastlane.jpeg" alt="bumi-manusia"
                    class="w-56 h-80 rounded-lg hover:scale-105 transition ease-in-out duration-150">
            </a>
            <h3 class="text-xl mt-2">Love in the Fast Lane</h3>
        </div>
        <div class="flex justify-between flex-col">
            <a href="/books/bumi-manusia">
                <img src="/img/pelakor.jpg" alt="bumi-manusia"
                    class="w-56 h-80 rounded-lg hover:scale-105 transition ease-in-out duration-150">
            </a>
            <h3 class="text-xl mt-2">Bumi Manusia</h3>
        </div>
        <div class="flex justify-between flex-col">
            <a href="/books/bumi-manusia">
                <img src="/img/pulang.jpg" alt="bumi-manusia"
                    class="w-56 h-80 rounded-lg hover:scale-105 transition ease-in-out duration-150">
            </a>
            <h3 class="text-xl mt-2">Bumi Manusia</h3>
        </div>
        <div class="flex justify-between flex-col">
            <a href="/books/bumi-manusia">
                <img src="/img/the-outsider.jpeg" alt="bumi-manusia"
                    class="w-56 h-80 rounded-lg hover:scale-105 transition ease-in-out duration-150">
            </a>
            <h3 class="text-xl mt-2">Bumi Manusia</h3>
        </div>
        <div class="flex justify-between flex-col">
            <a href="/books/bumi-manusia">
                <img src="/img/the-reaping.jpg" alt="bumi-manusia"
                    class="w-56 h-80 rounded-lg hover:scale-105 transition ease-in-out duration-150">
            </a>
            <h3 class="text-xl mt-2">Bumi Manusia</h3>
        </div>
         --}}
        </div>
    </div>
@endsection
