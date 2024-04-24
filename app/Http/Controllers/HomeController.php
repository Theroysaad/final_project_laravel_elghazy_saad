<?php

namespace App\Http\Controllers;

use App\Models\Places;
use App\Models\Reservation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Display the main page of the application
    public function index()
    {
        return view('home');
    }

    // Display the reservation page
    public function reservation()
    {
        return view('calendar.reservation');
    }

    // Store a new reservation
    public function store(Request $request)
    {
        //
        Reservation::create([
            'user_id' => auth()->user()->id,
            'table_id' => $request->table_id,
            'date' => $request->date,
            'timeStart' => $request->timeStart,
            'timeEnd' => $request->timeEnd,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //

        $events = Reservation::all()->map(function (Reservation $event) {
            $start = $event->date . " " . $event->timeStart;
            $end = $event->date . " " . $event->timeEnd;
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->table_id,
                "color" => "#FF0000",
            ];
        });     

        return response()->json([
            "reservations" => $events
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }
}
