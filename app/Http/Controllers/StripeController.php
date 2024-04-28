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

    public function session(Request $request) {

        // 

        

        Stripe::setApiKey(config('stripe.sk'));
        $session = Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'usd',
                        'product_data' => [
                            "name" => "LionsGeek Product",
                            "description"=> "nyehehehehe"
                        ],
                        'unit_amount'  => 6900,
                    ],
                    'quantity'   => 2,
                ],

            ],
            'mode'        => 'payment', // the mode  of payment
            'success_url' => route('home.index'), // route when success 
            'cancel_url'  => route('workspace.index'), // route when  failed or canceled
        ]);

        return redirect()->away($session->url);
    }

    

    public function success() {
        return back() ; 
    }
}
