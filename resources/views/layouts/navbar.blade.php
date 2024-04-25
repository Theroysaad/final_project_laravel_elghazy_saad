<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <div class="">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div x-data="{ open: true }"
                    class="flex flex-col max-w-screen-xl px-4 mx-auto md:ps-0 md:ms-5 md:items-center md:justify-between md:flex-row md:pe-6 lg:px-8">
                    <div class="flex flex-row items-center justify-between p-4">

                        <div class="w-52 h-10 flex justify-center items-center">
                            <a href="{{ route('home.index') }}"><img src="{{ asset('img/CoworkingLogo.png') }}" alt="Coworking Logo"></a>
                        </div>

                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline"
                            @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{ 'flex': open, 'hidden': !open }"
                        class="flex-col flex-grow hidden   md:pb-0 md:flex md:justify-end md:flex-row ">
                        <a class="px-4 py-2 mt-2 text-base text-decoration-none font-base bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="{{ route('contact') }}">Contact Us</a>
                        <select class=" border-none px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="workspace">
                            <option value="">Work Space</option>
                            <option value="">Desks</option>
                            <option value="">Offices</option>
                            <option value="">Private rooms</option>
                        </select>
                        <a class="px-4 py-2 mt-2 text-base font-base bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="{{ route('about') }}">About</a>

                        <div class="flex items-center justify-center mt-2">
                            @if (Route::has('login'))
                                <nav class="flex gap-2 ">
                                    @auth
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <button 
                                            class="rounded-md px-3 py-2  text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            log out
                                        </button>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="rounded-md px-3 border py-2 text-black transition hover:text-black/70   dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Log in
                                        </a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}"
                                                class="rounded-md md:px-0 px-3 bg-[#EE3E38] text-white border-[#EE3E38] py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif

                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
