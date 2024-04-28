<!-- Button trigger modal -->
<button id="clickMe" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thank you for your time !!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form id="main-form" method="post" class="w-full flex flex-col gap-y-5" action="/reservation/store">
                    @csrf
                    <label for="title">Event Title</label>
                    <input name="title" id="title" placeholder="Event Title" type="text" class="rounded-xl"
                        required>

                    <label for="date-start">Start Day</label>
                    
                    <input name="dateStart" id="date-start" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}"
                        type="date" class="rounded-xl" required>

                    <label for="time-start">Start time</label>
                    <input name="timeStart" id="time-start" step="1800" required min="08:00:00" max="19:00:00"
                        value="09:30:00" type="time" class="rounded-xl" required>

                    <label for="date-end">End Day</label>
                    <input name="dateEnd" id="date-end" type="date" class="rounded-xl" required>

                    <label for="time-end">End time</label>
                    <input name="timeEnd" id="time-end" type="time" class="rounded-xl" required>

                    <input type="hidden" id="place_id" name="place_id">

                    <button id="submit-button"
                        class="relative px-8 py-2 rounded-md hover:text-white bg-white isolation-auto z-10 border-2 border-[#EE3E38] before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-[#EE3E38] before:-z-10 before:aspect-square before:hover:scale-150 overflow-hidden before:hover:duration-700">
                        BOOK YOUR SPACE
                    </button>
                </form>

                {{-- <form id="secondary-form" method="get" action="/session">
                    @csrfhome
                </form> --}}

            </div>

        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', async function() {
        const path = window.location.pathname;
        const placeId = path.split('/').pop();
        document.getElementById('place_id').value = placeId;
    });
</script>
