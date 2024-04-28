<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function reservationShow(Request $request, Reservation $reservation)
    {
        //

        return view('adminn.reservationShow') ;
    }



    public function index() {
        return view('adminn.admin')  ;
    }


    
}
