@extends('layouts.index')


@include('layouts.navbar')

@section('content')
    <!-- component -->

    

@foreach ($reservations as $reservation)
    {{ $reservation->name }}
@endforeach

    <div class="back">
        <a href="#" id="title" class="top"><span>
                <button class="button">
                    <svg class="svgIcon" viewBox="0 0 384 512">
                        <path
                            d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
                        </path>
                    </svg>
                </button>
            </span>
        </a>
    </div>

    <section class="">
        {{-- sec 1 --}}
        <section class=" sec1 ">
            <div class="d-flex sec-1-ketba flex-column justify-content-center text-center p-5 ">
                <div class=" sec-1-h1 d-flex justify-content-center p-lg-4">
                    <h1 class="sec1-h1 text-5xl text-white">You deserve the <span class="text-[#EE3E38]">BEST</span> of your
                        work , family and life </h1>
                </div>
                <div class="d-flex justify-content-center text-white">
                    <p class="sec1-p">LEST'S WORK TOGETHER
                    </p>
                </div>
                <div class="d-flex justify-content-center gap-3 p-lg-5 ">
                    <a href="#workspaces">
                        <button
                            class="relative px-8 py-2 rounded-md hover:text-white bg-white isolation-auto z-10 border-2  border-[#EE3E38] before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-[#EE3E38] before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700">
                            BOOK YOUR SPACE
                        </button>
                    </a>
                </div>
            </div>
        </section>
        {{-- sec 2 --}}
        <section class=" flex flex-col lg:flex-row lg:justify-evenly lg:items-center py-28">

            <div class="sec-2-img w-[40%] ">
                <img class="" src="{{ asset('img/cowork_sec2.jpg') }}" alt="">
            </div>

            <div class="w-[40%]">
                <h3 class="font-semibold text-2xl text-[#EE3E38]"> CO-WORK SPACES</h3>
                <div>
                    <h1 class="font-base text-5xl">it gives you the head space and physical space to give your clients you
                        very best</h1>
                </div>
                <div>
                    <p>Co-working is a default way to have the freedom of working for yourself , while having an inspiring
                        space to work in , and a community of like-minded professionals to cheer you on .</p>
                </div>

                <div class="w-full h-40 flex items-center justify-center cursor-pointer">
                    <div
                        class="relative inline-flex items-center justify-start py-3 pl-4 pr-12 overflow-hidden font-semibold shadow text-[#EE3E38] transition-all duration-150 ease-in-out rounded hover:pl-10 hover:pr-6 bg-gray-50 dark:bg-gray-700 dark:text-white dark:hover:text-gray-200 dark:shadow-none group">
                        <span
                            class="absolute bottom-0 left-0 w-full h-1 transition-all duration-150 ease-in-out bg-[#EE3E38] group-hover:h-full"></span>
                        <span class="absolute right-0 pr-4 duration-200 ease-out group-hover:translate-x-12">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                class="w-5 h-5 text-green-400">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linejoin="round"
                                    stroke-linecap="round"></path>
                            </svg>
                        </span>
                        <span
                            class="absolute left-0 pl-2.5 -translate-x-12 group-hover:translate-x-0 ease-out duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                                class="w-5 h-5 text-green-400">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="2" stroke-linejoin="round"
                                    stroke-linecap="round"></path>
                            </svg>
                        </span>
                        <span
                            class="relative w-full text-left transition-colors duration-200 ease-in-out group-hover:text-white dark:group-hover:text-gray-200">Discover
                            More About</span>
                    </div>
                </div>
            </div>
        </section>
        {{-- section 3 --}}
        <section id="workspaces" class="flex flex-col gap-5 bg-slate-100 py-5 ">



            <!-- component -->
            <div class="flex items-center justify-center flex-col gap-5 bg-slate-100 py-5 lg:mr-[20vw]">
                @foreach ($places as $place)
                    <div
                        class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                        <div
                            class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border text-gray-700">
                            <img src="{{ asset('storage/img/' . $place->image) }}" alt="image"
                                class="h-full w-full object-cover" />
                        </div>

                        <div class="p-6">
                            <h6
                                class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-pink-500 antialiased">
                                {{ $place->types->name }}
                            </h6>
                            <h4
                                class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                Lyft launching cross-platform service this week
                            </h4>
                            <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                                Like so many organizations these days, Autodesk is a company in transition. It was until
                                recently a traditional boxed software company selling licenses. Yet its own business model
                                disruption is only part of the story
                            </p>
                            <a class="inline-block" href="{{ route('workspace.index', $place) }}">
                                <buttonw
                                    class="flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    type="button">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                    </svg>
                                </buttonw>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- component -->
            {{-- <div class="flex  items-center justify-center lg:ml-[20vw]">
                <div
                    class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div class="p-6">
                        <h6
                            class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-pink-500 antialiased">
                            startups
                        </h6>
                        <h4
                            class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Lyft launching cross-platform service this week
                        </h4>
                        <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                            Like so many organizations these days, Autodesk is a company in
                            transition. It was until recently a traditional boxed software company
                            selling licenses. Yet its own business model disruption is only part of
                            the story
                        </p>
                        <a class="inline-block" href="#">
                            <button
                                class="flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div
                        class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border text-gray-700">
                        <img src="{{ asset('img/desks.jpg') }}" alt="image" class="h-full w-full object-cover" />
                    </div>
                </div>
            </div> --}}

            <!-- component -->
            {{-- <div class="flex  items-center justify-center lg:mr-[20vw]">
                <div
                    class="relative flex w-full max-w-[48rem] flex-row rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                    <div
                        class="relative m-0 w-2/5 shrink-0 overflow-hidden rounded-xl rounded-r-none bg-white bg-clip-border text-gray-700">
                        <img src="{{ asset('img/desks.jpg') }}" alt="image" class="h-full w-full object-cover" />
                    </div>
                    <div class="p-6">
                        <h6
                            class="mb-4 block font-sans text-base font-semibold uppercase leading-relaxed tracking-normal text-pink-500 antialiased">
                            startups
                        </h6>
                        <h4
                            class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                            Lyft launching cross-platform service this week
                        </h4>
                        <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                            Like so many organizations these days, Autodesk is a company in
                            transition. It was until recently a traditional boxed software company
                            selling licenses. Yet its own business model disruption is only part of
                            the story
                        </p>
                        <a class="inline-block" href="#">
                            <button
                                class="flex select-none items-center gap-2 rounded-lg py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-pink-500 transition-all hover:bg-pink-500/10 active:bg-pink-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                type="button">
                                Learn More
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>

            </div> --}}

        </section>
    </section>


    @include('layouts.footer')
@endsection
