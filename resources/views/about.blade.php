@extends('layouts.index')

@include('layouts.navbar')
@section('content')

    <section class="flex flex-col justify-center items-center">

        <section class=" flex flex-col lg:flex-row lg:justify-evenly lg:items-center py-28">
            <div class="sec-2-img w-[40%] ">
                <img class="" src="{{ asset('img/about.jpg') }}" alt="">
            </div>
            <div class="w-[40%] lg:flex lg:flex-col gap-5 about-ketba bg-slate-200 p-5">
                <h3 class="font-semibold text-7xl  text-[#EE3E38]"> COLLABHUB <span class="text-black">.</span> </h3>
                <div>
                    <h1 class="font-serif text-5xl">Empowering you to WORK WONDERS</h1>
                </div>
            </div>
        </section>

        <section class=" flex flex-col lg:flex-row lg:justify-evenly lg:items-center py-28 bg-slate-100">
            <div class="w-[40%] lg:flex lg:flex-col gap-5">
                <div class="about-ketba bg-slate-200 p-5">
                    <h1 class="font-serif text-4xl ">At <span class="font-serif text-5xl  text-[#EE3E38]">COLLABHUB</span>,
                        we're more than just a place to work. We're a vibrant community of professionals, entrepreneurs, and
                        creatives coming together to collaborate, innovate, and grow.</h1>
                </div>
            </div>
            <div class="sec-2-img w-[40%] ">
                <img class="" src="{{ asset('img/about2.jpg') }}" alt="">
            </div>
        </section>

        <div class="w-[100%] flex flex-col justify-center items-center py-10 text-center">
            <h1 class="text-2xl text-[#EE3E38]">OUR MISSIONS :</h1>
            <p class="w-[50%] text-3xl ">
                Our mission is to provide a dynamic and supportive environment where individuals and teams can thrive. We
                believe in fostering connections, sharing knowledge, and empowering our members to reach their full
                potential.
            </p>
        </div>

    </section>
    @include('layouts.footer')
@endsection

