<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
    </button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('place.update', $place) }}" method="post">
                    @csrf
                    @method("PUT")
                    
                    <div class="flex justify-between gap-3">
                        <span class="w-1/2">
                            <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Co-Working
                                Space</label>
                            <select id="cowork" name="name"
                                class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                                required>
                                <option disabled selected value="">Which co-work is it </option>
                                <option value="desks">desks</option>
                                <option value="conference_rooms">conference rooms</option>
                                <option value="private_offices">private offices</option>
                            </select>
                        </span>
                    </div>

                    <label for="text"
                        class="block mt-2 text-xs font-semibold text-gray-600 uppercase">description</label>
                    <input value="{{ old('description', $place->description) }}" name="description" type="text" placeholder="insert place price"
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                    <label for="text" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">amenities</label>
                    <input  value="{{ old('amenities', $place->amenities) }}" name="amenities" type="text" placeholder="insert place price"
                    required 
                        class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"
                        required />
                    <label for="number" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Price / hour
                    </label>
                    <input value="{{ old('HourPrice', $place->HourPrice) }}" name="HourPrice" type="number" placeholder="insert place price"
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

                    <button>Update</button>
                </form>

            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>
