<?php

namespace App\Http\Controllers;

use App\Mail\AuthMailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DoubleAuthController extends Controller
{
    //

    public function index() {
        return view('auth.2fa');
    }

 
    public function authSwitcher()
    {
        //* method 1
        $user = User::where("id", auth()->user()->id)->first();
        //* method 2
        // $user = Auth::user();

        $code = rand(100000, 999999);

        // ila l user kayn o  2FA  makhdamch   kankhadmoha  / ila khdama kantfiwha   // b7al  chi  toggle
        if ($user) {
            $user->double_auth = !$user->double_auth;
            $user->auth_validate = $user->double_auth ? false : true;
            $user->save();
            if ($user->double_auth) {
                // une fois  knkhdmo 2fa   kansifto lih code   
                Mail::to($user->email)->send(new AuthMailer($code));
                // m3a kankhadmoha kanstokiw  l code f database   o kandwzoh i valider  l code 
                $user->validation_code = $code;
                $user->save();
                return redirect()->route("2fa");
            }
        }
        return back();
    }
}
