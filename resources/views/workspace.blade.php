@extends('layouts.index')

@section('content')
    @include('layouts.navbar')

    <div class="bg-gray-100 dark:bg-gray-800 py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                        <img class="w-full h-full object-cover" src="{{ asset('img/cowork_first_image.jpg') }}"
                            alt="Product Image">
                    </div>
                    <div class="flex -mx-2 mb-4">
                        <button
                            class="relative px-8 py-2 rounded-md hover:text-white bg-white isolation-auto z-10 border-2  border-[#EE3E38] before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-[#EE3E38] before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700">
                            BOOK YOUR SPACE
                        </button>

                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{ $place->types->name }}</h2>
                    

                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                        {{ $place->description }}
                    </p>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold text-gray-700 dark:text-gray-300">Price:</span>
                            <span class="text-gray-600 dark:text-gray-300">{{ $place->HourPrice }} $</span>
                        </div>
                        <div>
                            <span class="font-bold text-gray-700 dark:text-gray-300">Availability:</span>
                            <span class="text-gray-600 dark:text-gray-300">In Stock</span>
                        </div>
                    </div>

                    <div class="mb-4 w-[50vw] h-[50vh]">
                        <div class=" h-[100%] w-[100%] bg-white rounded-3xl border-none p-3" id="calendar"></div>
                        @include('calendar.modal')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const path = window.location.pathname;
        const placeId = path.split('/').pop();
        document.addEventListener('DOMContentLoaded', async function() {
            const {
                data
            } = await axios.get(`/reservation/show/${placeId}`);
            const events = data.events;
            console.log(events);

            var myCalendar = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(myCalendar, {
                headerToolbar: {
                    left: 'dayGridMonth,timeGridWeek,timeGridDay',
                    center: 'title',
                    right: 'listMonth,listWeek,listDay'
                },
                views: {
                    listDay: { // Customize the name for listDay
                        buttonText: 'Day Events',
                    },
                    listWeek: { // Customize the name for listWeek
                        buttonText: 'Week Events'
                    },
                    listMonth: { // Customize the name for listMonth
                        buttonText: 'Month Events'
                    },
                    timeGridWeek: {
                        buttonText: 'Week', // Customize the button text
                    },
                    timeGridDay: {
                        buttonText: "Day",
                    },
                    dayGridMonth: {
                        buttonText: "Month",
                    },

                },

                initialView: "timeGridWeek",
                slotMinTime: "09:00:00", // min  time  appear in the calendar
                slotMaxTime: "19:00:00",
                nowIndicator: true,
                selectable: true,
                selectMirror: true,
                selectOverlap: false,
                weekends: true,

                // events  hya  property dyal full calendar
                //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
                events: events,
                selectAllow: (info) => {
                    let instant = new Date()
                    return info.start > instant
                },

                select: (info) => {
                    let start = info.start
                    let end = info.end
                    if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                        alert("rak khditi bzaf dyal l wa9t")
                        calendar.unselect()
                        return
                    }
                    document.getElementById("date-start").value = formatDate(start).day
                    if (info.allDay) {
                        document.getElementById("date-end").value = formatDate(start).day
                        document.getElementById("time-start").value = "09:00:00"
                        document.getElementById("time-end").value = "19:00:00"
                    } else {
                        document.getElementById("date-end").value = formatDate(end).day
                        document.getElementById("time-start").value = formatDate(start).time
                        document.getElementById("time-end").value = formatDate(end).time
                    }
                    document.getElementById("clickMe").click()
                },
                eventClick: (info) => {
                    // alert("event clicked")
                    console.log(info);
                }
            });
            calendar.render();

            function formatDate(date) {
                let year = String(date.getFullYear())
                let month = String(date.getMonth() + 1).padStart(2, 0)
                let day = String(date.getDate()).padStart(2, 0)

                let hour = String(date.getHours()).padStart(2, 0)
                let min = String(date.getMinutes()).padStart(2, 0)
                let sec = String(date.getSeconds()).padStart(2, 0)

                return {
                    day: `${year}-${month}-${day}`,
                    time: `${hour}:${min}:${sec}`
                }


            }
        });
    </script>


    @include('layouts.footer')
@endsection
