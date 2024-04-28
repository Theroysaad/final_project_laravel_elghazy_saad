@extends('layouts.index')

@section('content')
    @include('layouts.navbar')

    <section class="flex flex-col gap-5">

        <div class="grid min-h-screen place-items-center">
            <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
                <h1 class="text-xl font-semibold">Hello admin ?, <span class="font-normal">please fill in cowork information
                        to continue</span></h1>
                <form class="mt-6" method="post" action="{{ route('place.store') }}" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" id="types_id" name="types_id">

                    <div class="flex justify-between gap-3">
                        <span class="w-1/2">
                            <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Co-Working
                                Space</label>
                            <select id="cowork" name="name"
                                class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                                required>
                                <option disabled selected value="">Which co-work is it </option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                                <!-- Options will be dynamically populated here -->
                            </select>
                        </span>
                    </div>

                    <label for="text"
                        class="block mt-2 text-xs font-semibold text-gray-600 uppercase">description</label>
                    <input id="description" type="text" name="description" placeholder="description"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                    <label for="text" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">amenities</label>
                    <input id="amenities" type="text" name="amenities" placeholder=""
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                    <label for="number" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Price / hour
                    </label>
                    <input id="HourPrice" type="number" name="HourPrice" placeholder="$" autocomplete="new-password"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />

                    <div class="pt-5">
                        <label for="uploadFile1"
                            class="bg-white text-gray-500 font-semibold text-base rounded max-w-md h-52 flex flex-col items-center justify-center cursor-pointer border-2 border-gray-300 border-dashed mx-auto font-[sans-serif]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-11 mb-2 fill-gray-500" viewBox="0 0 32 32">
                                <path
                                    d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"
                                    data-original="#000000" />
                                <path
                                    d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z"
                                    data-original="#000000" />
                            </svg>
                            Upload file
                            <input name="image" type="file" id='uploadFile1' class="hidden" />
                            <p class="text-xs font-medium text-gray-400 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
                        </label>
                    </div>

                    <button type="submit"
                        class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                        Create the cowork
                    </button>
                </form>
            </div>
        </div>

        <section id="workspaces" class="flex flex-col gap-5 bg-slate-100 py-5 ">
            <div class="flex items-center justify-center flex-col gap-5 bg-slate-100 py-5 ">

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
                                {{ $place->description }}
                            </h4>
                            <p class="mb-8 block font-sans text-base font-normal leading-relaxed text-gray-700 antialiased">
                                {{ $place->amenities }}
                            </p>
                            <form class="lg:pt-10" action="{{ route('place.delete', $place) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="border px-5 py-3  hover:bg-[#ee3e38a1] rounded-lg">Delete</button>
                            </form>

                            {{-- @include('adminn.components.update') --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        @foreach ($users as $user)
            <p>{{ $user->name }}</p>
        @endforeach

        {{-- @foreach ($places as $place)
            <!-- Loop through places -->
            <p>{{ $place->name }}</p>

        @endforeach --}}

        {{-- @foreach ($types as $type)
            <!-- Loop through types -->
            <p>{{ $type->name }}</p>
        @endforeach --}}



        <h1>User Details</h1>

        <p>Name: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <!-- Add more user details as needed -->

        <h2>Reservations</h2>

        @if ($reservations->count() > 0)
            <ul>
                @foreach ($reservations as $reservation)
                    <li>{{ $reservation->name }} - {{ $reservation->place_id }} - {{ $reservation->dateStart }} -
                        {{ $reservation->timeStart }}</li>
                @endforeach
            </ul>
        @else
            <p>No reservations found for this user.</p>
        @endif

    </section>
    <script>
        // Add event listener to the select dropdown
        document.getElementById('cowork').addEventListener('change', function() {
            // Get the selected option
            var selectedOption = this.options[this.selectedIndex];
            // Get the value (type ID) of the selected option
            var typeId = parseInt(selectedOption.value);
            // Update the value of the hidden input field
            document.getElementById('types_id').value = typeId;
        });
    </script>


    @include('layouts.footer')
@endsection
