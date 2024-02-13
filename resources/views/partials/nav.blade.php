<nav class="bg-white shadow-sm">
    <div class="flex items-center justify-between h-24 mx-20">
        <div class="text-3xl font-bold"><a href="/books">readify.</a></div>
        <div>
            <ul class="flex items-center gap-8">
                <li><a href="/books" class="text-lg transition duration-150 ease-in-out hover:text-gray-600">Books</a>
                </li>
                <li><a href="/trending"
                        class="text-lg transition duration-150 ease-in-out hover:text-gray-600">Trending</a>
                </li>
                <li><a href="#"
                        class="text-lg transition duration-150 ease-in-out hover:text-gray-600">Discover</a>
                </li>
                @guest
                    <li>
                        <button
                            class="w-32 h-16 text-2xl font-bold text-white uppercase transition duration-150 ease-in-out bg-blue-500 rounded-xl hover:bg-blue-600"
                            onclick="location.href = '/login'">
                            Sign In
                        </button>
                    </li>
                @endguest

                @auth
                    <li>
                        <!-- component -->
                        <div x-data="{ open: false }" class="flex items-center justify-center bg-white dark:bg-gray-800">
                            <div @click="open = !open" class="relative py-3 border-b-4 border-transparent"
                                :class="{ 'border-blue-500 transform transition duration-300 ': open }"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100">
                                <div class="flex items-center justify-center space-x-3 cursor-pointer">
                                    <div class="w-10 h-10 overflow-hidden rounded-full dark:border-white">
                                        <img src="https://images.unsplash.com/photo-1610397095767-84a5b4736cbd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                                            alt="" class="object-cover w-full h-full">
                                    </div>
                                </div>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="absolute right-0 w-48 px-5 py-3 mt-5 bg-white border rounded-lg shadow dark:bg-gray-800 dark:border-transparent">
                                    <ul class="space-y-3 dark:text-white">
                                        <li class="font-medium">
                                            <a href="#"
                                                class="flex items-center transition-colors duration-200 transform border-r-4 border-transparent hover:border-indigo-700">
                                                <div class="mr-3">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                Profile
                                            </a>
                                        </li>
                                        <li class="font-medium">
                                            <a href="#"
                                                class="flex items-center transition-colors duration-200 transform border-r-4 border-transparent hover:border-indigo-700">
                                                <div class="mr-3">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                </div>
                                                Settings
                                            </a>
                                        </li>
                                        <hr class="dark:border-gray-700">
                                        <li class="font-medium">
                                            <form action="{{ route('logout.perform') }}" method="POST"
                                                class="flex items-center transition-colors duration-200 transform border-r-4 border-transparent hover:border-red-600">
                                                @method('POST')
                                                @csrf
                                                <button class="flex">
                                                    <div class="mr-3 text-red-600">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    Logout
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                @endauth
            </ul>
        </div>
    </div>
</nav>
