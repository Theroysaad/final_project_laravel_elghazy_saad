<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('calendar.reservation');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = [
            "name" => $request->title,
            "place_id" => $request->place_id,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "dateEnd" => $request->dateEnd,
            "timeEnd" => $request->timeEnd
        ];

        Reservation::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //

        $events = Reservation::all()->map(function (Reservation $event) {
            $start = $event->dateStart . " " . $event->timeStart;
            $end = $event->dateEnd . " " . $event->timeEnd;
            return [
                "start" => $start,
                "end" => $end,
                "title" => $event->name,
                "color" => "#000",
            ];
        });

        return response()->json([
            "events" => $events
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function showById(int $placeId)
    {
        $reservations = Reservation::getAllForWorkspace($placeId);
        
        // Map reservations to the required format
        $events = $reservations->map(function (Reservation $reservation) {
            $start = $reservation->dateStart . " " . $reservation->timeStart;
            $end = $reservation->dateEnd . " " . $reservation->timeEnd;
            return [
                "place_id" => $reservation->placeId,
                "start" => $start,
                "end" => $end,
                "title" => $reservation->name,
                "color" => "#007bff",
            ];
        });
        
        return response()->json([
            "events" => $events
        ]);

    }
}    
