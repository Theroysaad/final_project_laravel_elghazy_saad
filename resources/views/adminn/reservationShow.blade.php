@extends('layouts.index')

@section('content')
    @include('layouts.navbar')

    <section class="py-10 flex justify-center items-center">






        <div class="overflow-x-auto">
            <table class="min-w-full bg-white font-[sans-serif]">
                <thead class="bg-gray-800 whitespace-nowrap">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Email
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Start Time
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Start Date
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            End Time
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            End Date
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                            Actions
                        </th>
                    </tr>
                </thead>

                @if ($reservations->count() > 0)
                
                                <tbody class="whitespace-nowrap">
                                    @foreach ($reservations as $reservation)
                                        <tr class="even:bg-blue-50">
                                            <td class="px-6 py-4 text-sm">
                                                {{ $reservation->place->types->name }}
                                                {{ $reservation->place->types->name }}
                                            </td>
                                            <td class="px-6 py-4 text-sm">
                                                {{-- {{ $reservation->user->email }} --}}
                                            </td>
                                            <td class="px-6 py-4 text-sm">
                                                {{ $reservation->dateStart }}
                                            </td>
                                            <td class="px-6 py-4 text-sm">
                                                {{ $reservation->timeStart }}
                                            </td>
                                            </td>
                                            <td class="px-6 py-4 text-sm">
                                                {{ $reservation->dateEnd }}
                                            </td>
                                            <td class="px-6 py-4 text-sm">
                                                {{ $reservation->timeEnd }}
                                            <td class="px-6 py-4">
                
                                                <form action="{{ route('reservations.delete', $reservation) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="mr-4" title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                                                                data-original="#000000" />
                                                            <path
                                                                d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                                                                data-original="#000000" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                
                                </tbody>
                @else
                    <p>No reservations found .</p>
                @endif
            </table>
        </div>
    </section>


















    @include('layouts.footer')
@endsection
