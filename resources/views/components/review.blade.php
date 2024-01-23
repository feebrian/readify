<div class="flex gap-4 mt-4 mb-14">
    <div>
        <img src="/img/kaneki.jpg" alt="kaneki" class="w-16 rounded-full">
    </div>
    <div class="flex flex-col w-full">
        <div class="flex flex-col">
            <div class="flex gap-2">
                <div class="flex justify-between w-full">
                    <div class="flex gap-2">
                        <p class="text-xl">{{ $reviewer }}</p>
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
                    <span class="text-[#939393]">&bull; {{ $datePublished }}</span>
                </div>
            </div>
            <p class="text-[#676767]">{{ $reviewer }}</p>
            <p class="mt-4">{{ $reviewBody }}</p>
        </div>
    </div>
</div>
