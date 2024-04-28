@extends('layouts.index')

@include('layouts.navbar')
@section('content')
    <section class="flex flex-col justify-center items-center p-10">


        <section class="py-12 bg-gray-100">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                    <div>
                        <img src="{{ asset('img/desks.jpg') }}" alt="Image"
                            class="rounded-md object-cover w-full h-full" />
                    </div>
                    <div>
                        <h2 class="text-3xl font-extrabold text-[#EE3E38] mb-4">About Our Coworking Space</h2>
                        <p class="text-gray-700 text-base leading-6">
                            Welcome to COLLABHUB! We are more than just a shared workspace; we're a
                            community of innovators, entrepreneurs, and creators coming together to build something extraordinary.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.
                        </p>
                        <p class="text-gray-700 text-base leading-6 mt-4">
                            Our mission is to provide a collaborative environment where individuals and businesses can thrive.
                            Whether you're a freelancer looking for a quiet place to work, a startup seeking networking
                            opportunities, or a remote team in need of a professional workspace, we have the amenities and
                            support you need to succeed.
                        </p>
                        <p class="text-gray-700 text-base leading-6 mt-4">
                            Join us and become part of a vibrant community dedicated to innovation, creativity, and
                            collaboration. Together, we can achieve more than we ever imagined.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="font-[sans-serif] text-gray-800 bg-gray-100 px-6 py-12">
            <div class="grid lg:grid-cols-2 gap-8 max-lg:max-w-2xl mx-auto ">
                <div class="text-left">
                    {{-- <h2 class="text-4xl font-extrabold mb-6">Welcome to Our Website</h2> --}}
                    <h1 class="text-3xl  mb-4">At <span
                            class=" text-[#EE3E38]">COLLABHUB</span>,
                        we're more than just a place to work. We're a vibrant community of professionals, entrepreneurs, and
                        creatives coming together to collaborate, innovate, and grow.</h1>
                    <p class="mb-4 text-sm">Empowering you to WORK WONDERS</p>

                    <div class="grid xl:grid-cols-3 sm:grid-cols-2 gap-8 mt-12">
                        <div class="flex items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h6 class="text-base font-semibold ml-4">coffee shop</h6>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h6 class="text-base font-semibold ml-4">Security</h6>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h6 class="text-base font-semibold ml-4">Support</h6>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h6 class="text-base font-semibold ml-4">Performance</h6>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h6 class="text-base font-semibold ml-4">fiber-optic internet</h6>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" class="fill-green-500 shrink-0"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"
                                    data-original="#000000"></path>
                            </svg>
                            <h6 class="text-base font-semibold ml-4">Communication</h6>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <img src="{{ asset('img/about.jpg') }}" alt="Placeholder Image"
                        class="rounded-lg object-cover w-full h-full" />
                </div>
            </div>
        </div>

        <div class="bg-gray-100 px-6 py-12 font-[sans-serif]">
            <div class="container mx-auto p-6  rounded-lg shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <img src="{{ asset('img/about2.jpg') }}" alt="Image"
                            class="rounded-md object-cover w-full h-full" />
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold text-[#EE3E38] mb-4">OUR MISSIONS :</h2>
                        <p class="text-gray-700 text-sm leading-6">
                            At COLLABHUB, our mission is to provide a vibrant and inclusive environment
                            where individuals and businesses can thrive. Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <ul class="list-disc text-sm text-gray-700 space-y-2 pl-4 mt-6">
                            <li>Offer flexible workspaces tailored to your needs.</li>
                            <li>Promote collaboration and networking opportunities.</li>
                            <li>Create a supportive community of like-minded professionals.</li>
                            <li>Inspire innovation and creativity in your work.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




        

    </section>
    @include('layouts.footer')
@endsection
