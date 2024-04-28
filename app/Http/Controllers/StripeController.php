<?php

namespace App\Http\Controllers;

use App\Models\Places;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;
use DateTime;
use DateInterval;

class StripeController extends Controller
{


    public function session(Request $request)
    {

        Stripe::setApiKey(config('stripe.sk'));

                $place = Places::getPlaceById($request->place_id)->first();
        $placeHourPrice = $place->HourPrice;

        $dateStart = $request->dateStart;
        $dateEnd = $request->dateEnd;
        $timeStart = $request->timeStart;
        $timeEnd = $request->timeEnd;

        $hours = $this->calculateHours($dateStart, $timeStart, $dateEnd, $timeEnd);

        $totalAmount = $placeHourPrice * $hours;

        $reservation = new Reservation();
        $reservation->user_id = Auth::id();
        $reservation->place_id = $request->place_id;
        $reservation->name = $request->title;
        $reservation->timeStart = $request->timeStart;
        $reservation->dateStart = $request->dateStart;
        $reservation->timeEnd = $request->timeEnd;
        $reservation->dateEnd = $request->dateEnd;
        $reservation->price = $totalAmount;
        $reservation->save();

        $description = 'Reservation start in ' . $reservation->dateStart . ' at ' . $reservation->timeStart . 'and ends in ' . $reservation->dateEnd . ' at ' . $reservation->timeEnd;

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            "name" => $reservation->name,
                            "description" => $description
                        ],
                        'unit_amount'  => $totalAmount * 100,
                    ],
                    'quantity' => 1,
                ],

            ],
            'mode'        => 'payment', // the mode  of payment
            'success_url' => route('workspace.index', $request->place_id), // route when success 
            'cancel_url'  => route('home.index'), // route when  failed or canceled
        ]);

        return redirect()->away($session->url);
    }


    function calculateHours($startDate, $startTime, $endDate, $endTime) {
        $startDateTime = new DateTime("$startDate $startTime");
        $endDateTime = new DateTime("$endDate $endTime");
    
        $totalHours = 0;
    
        while ($startDateTime < $endDateTime) {
            $workingStart = clone $startDateTime;
            $workingStart->setTime(9, 0);
            $workingEnd = clone $startDateTime;
            $workingEnd->setTime(19, 0);
    
            if ($workingStart > $endDateTime) {
                break;
            }
    
            $hours = min(10, ($workingEnd->getTimestamp() - max($startDateTime->getTimestamp(), $workingStart->getTimestamp())) / 3600);
    
            $totalHours += $hours;
    
            $startDateTime->add(new DateInterval('P1D'));
        }
    
        return $totalHours;
    }
    
}
