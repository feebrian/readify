@extends('layout.app')

@section('content')
    <div class="grid grid-cols-12 gap-8 mt-8">
        <div class="col-start-3 col-span-2">
            <img src="/img/bumi-manusia.jpg" alt="bumi-manusia" class="w-96">
        </div>
        <div class="col-start-5 col-span-6">
            <h2 class="text-3xl font-semibold">Bumi Manusia</h2>
            <p class="text-gray-600">By Pramoedya Ananta Toer | Published 1980</p>
            <div class="flex items-center mt-1 gap-2">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                        class="feather feather-star w-6 h-6">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                        </polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                        class="feather feather-star w-6 h-6">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                        </polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                        class="feather feather-star w-6 h-6">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                        </polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                        class="feather feather-star w-6 h-6">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                        </polygon>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                        class="feather feather-star w-6 h-6">
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                        </polygon>
                    </svg>
                </div>
                <span class="font-semibold">5.0</span>
            </div>
            <p class="text-gray-700 mt-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati id officia odit
                tempora. Itaque culpa iusto, ab nostrum obcaecati fugiat, eaque, corrupti dolores earum quaerat aut vitae
                beatae possimus quis <span
                    class="underline text-blue-500 cursor-pointer hover:text-blue-600 transition ease-in-out duration-150">more...</span>
            </p>

            <div class="grid grid-cols-6 mt-8 gap-y-1.5">
                <span class="col-start-1 font-medium">Penulis</span>
                <span class="col-span-3 text-gray-500">Pramoedya Ananta Toer</span>

                <span class="col-start-1 font-medium">Penerbit</span>
                <span class="col-span-3 text-gray-500">Lentera Dipantara</span>

                <span class="col-start-1 font-medium">Tahun Terbit</span>
                <span class="col-span-3 text-gray-500">Jakarta., 2005</span>

                <span class="col-start-1 font-medium">Kategori</span>
                <span class="col-span-3 text-gray-500">Novel</span>

                <span class="col-start-1 font-medium">Genre</span>
                <span class="col-span-3 text-gray-500">Novel, Fiksi sejarah</span>
            </div>

            <div class="flex gap-4 mt-8">
                <button
                    class="bg-blue-500 w-24 h-10 rounded-md text-white font-medium hover:bg-blue-600 transition ease-in-out duration-150">Pinjam</button>
                <button
                    class="bg-slate-50 w-24 h-10 rounded-md text-gray-500 border-2 border-gray-300 font-medium hover:bg-gray-200 transition ease-in-out duration-150">Preview</button>
            </div>

        </div>

        <div class="col-start-3 col-span-6">
            <div class="mt-16">
                <h2 class="uppercase text-xl font-semibold tracking-widest text-gray-500">Tulis Ulasan</h2>
            </div>
            <div class="flex gap-4 mt-2">
                <div>
                    <img src="/img/kaneki.jpg" alt="kaneki" class="w-16 rounded-full">
                </div>
                <div class="w-full">
                    <textarea name="review" id="_review" rows="1" placeholder="Write here..."
                        class="bg-[#F5F5F5] border-2 border-[#D9D9D9] rounded-md px-2 py-4 w-full focus:outline-none"></textarea>
                    <div class="flex justify-between mt-2">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                class="feather feather-star w-6 h-6">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                class="feather feather-star w-6 h-6">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                class="feather feather-star w-6 h-6">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                class="feather feather-star w-6 h-6">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                class="feather feather-star w-6 h-6">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </div>
                        <button
                            class="w-24 h-10 text-white text-lg font-medium rounded-md bg-blue-500 hover:bg-blue-600 transition ease-in-out duration-150">Send</button>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <h2 class="uppercase text-xl font-semibold tracking-widest text-gray-500">Ulasan</h2>
            </div>

            {{-- <div class="flex gap-4 mt-4 mb-14">
                <div>
                    <img src="/img/kaneki.jpg" alt="kaneki" class="w-16 rounded-full">
                </div>
                <div class="flex flex-col w-full">
                    <div class="flex flex-col">
                        <div class="flex gap-2">
                            <div class="flex justify-between w-full">
                                <div class="flex gap-2">
                                    <p class="text-xl">Adam Febrian</p>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </div>
                                </div>
                                <span class="text-[#939393]">&bull; February 21, 2006</span>
                            </div>
                        </div>
                        <p class="text-[#676767]">unamee</p>
                        @if (Str::length($review_body) > 100)
                            <p class="mt-4">{{ Str::limit($review_body, 150, '') }} <button class="tog"></button>
                            </p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex gap-4 mt-4 mb-14">
                <div>
                    <img src="/img/kaneki.jpg" alt="kaneki" class="w-16 rounded-full">
                </div>
                <div class="flex flex-col w-full">
                    <div class="flex flex-col">
                        <div class="flex gap-2">
                            <div class="flex justify-between w-full">
                                <div class="flex gap-2">
                                    <p class="text-xl">Adam Febrian</p>
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFC700"
                                            class="feather feather-star w-5 h-5">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </div>
                                </div>
                                <span class="text-[#939393]">&bull; February 21, 2006</span>
                            </div>
                        </div>
                        <p class="text-[#676767]">unamee</p>
                        <p class="mt-4"></p>
                    </div>
                </div>
            </div> --}}

            <x-review id="1" reviewer="{{ $reviewer }}" review-body="{{ $review_body }}"
                date-published="{{ $date_published }}" />
            <x-review id="1" reviewer="{{ $reviewer }}" review-body="{{ $review_body }}"
                date-published="{{ $date_published }}" />


        </div>
    </div>

    {{-- <script>
        $(document).ready(function() {
            $('.toggle-button').click(function() {
                const review = $(this).closest('.review');
                review.find('.review-content')
            })
        })
    </script> --}}
@endsection
