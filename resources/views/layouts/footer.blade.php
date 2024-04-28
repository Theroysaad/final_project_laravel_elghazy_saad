<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="<link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-+RDkWWtIQ8EW+u/HSJPP6LXSCWQe6MH6Iw1pM4hbHwZgV56FtF7Ui2ezsJCpvBhh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>


    <footer class="bg-gray-900 py-12 px-16 font-[sans-serif]">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- <div>
                <h2 class="text-white text-lg font-bold mb-4">Quick Links</h2>
                <ul class="space-y-3">
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">Newsroom</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">Tailwind CSS</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">Careers</a>
                    </li>
                </ul>
            </div> --}}
            <div>
                <h2 class="text-white text-lg font-bold mb-4">Follow Us</h2>
                <ul class="space-y-3">
                    <li>
                        <a href="https://github.com/Theroysaad  "
                            class="text-gray-400 hover:text-white text-base transition-all">Github</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/saad-el-ghazy-7b29952b6/"
                            class="text-gray-400 hover:text-white text-base transition-all">linkedin</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"
                            class="text-gray-400 hover:text-white text-base transition-all">Twitter</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="text-white text-lg font-bold mb-4">Company</h2>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('about') }}"
                            class="text-gray-400 hover:text-white text-base transition-all">About</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="text-gray-400 hover:text-white text-base transition-all">Contact Us</a>
                    </li>
                    <li>
                        <a href=""
                            class="text-gray-400 hover:text-white text-base transition-all">workspaces</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center lg:justify-center">
                <a href='{{ route('home.index') }}'><img src="{{ asset('img/collabhub-high-resolution-logo-white-transparent.png') }}" alt="logo"
                        class='w-60' /></a>
            </div>
        </div>
        <hr class="my-8 border-gray-700" />
        <div class="sm:flex sm:items-center sm:justify-between sm:flex-row">
            <p class='text-gray-400 text-sm sm:order-1'>© 2023<a href='https://readymadeui.com/' target='_blank'
                    class="hover:underline mx-1">ReadymadeUI</a>All Rights Reserved.
            </p>
            <div class="flex space-x-5 max-sm:mt-4">
                <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">
                    <svg class="w-5 h-5 fill-gray-400 hover:fill-white" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63
                    .772-1.63 1.558V12h2.77l-.443 2.89h-2.327V22C18.343 21.128 22 16.991 22 12"></path>
                    </svg>
                </a>
                <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">
                    <svg class="w-5 h-5 fill-gray-400 hover:fill-white" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2C6.486 2 2 6.486 2 12c0 5.513 4.486 10 10 10s10-4.487 10-10c0-5.514-4.486-10-10-10zm0 1.542c4.951 0 8.458 3.392 8.458 8.458 0 4.949-3.391 8.458-8.458 8.458-4.948 0-8.458-3.391-8.458-8.458
                        0-4.949 3.392-8.458 8.458-8.458zM9.743 16.747V7.128l6.027 4.31-6.027 4.309z">
                        </path>
                    </svg>
                </a>
                <a href="javascript:void(0)" class="text-gray-400 hover:text-white text-base transition-all">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        class="fill-gray-400 hover:fill-white w-5 h-5" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M21 5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm-2.5 8.2v5.3h-2.79v-4.93a1.4 1.4 0 0 0-1.4-1.4c-.77 0-1.39.63-1.39 1.4v4.93h-2.79v-8.37h2.79v1.11c.48-.78 1.47-1.3 2.32-1.3 1.8 0 3.26 1.46 3.26 3.26zM6.88 8.56a1.686 1.686 0 0 0 0-3.37 1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68zm1.39 1.57v8.37H5.5v-8.37h2.77z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </footer>



</body>

</html>
