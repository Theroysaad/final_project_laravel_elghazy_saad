<?php

namespace App\Http\Controllers;

use App\Models\Places;
use App\Models\Reservation;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    //

    public function session(Request $request)
    {

        Stripe::setApiKey(config('stripe.sk'));

        $reservation = new Reservation();
        //$reservation->user_id = Auth::id();
        $reservation->place_id = $request->place_id;
        $reservation->name = $request->title;
        $reservation->timeStart = $request->timeStart;
        $reservation->dateStart = $request->dateStart;
        $reservation->timeEnd = $request->timeEnd;
        $reservation->dateEnd = $request->dateEnd;
        $reservation->save();

        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            "name" => $reservation->name,
                            "description" => "Reservation"
                        ],
                        'unit_amount'  => 6900,
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
}
