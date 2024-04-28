<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DoubleAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = User::where('id' , auth()->user()->id)->first();
        if ($user && $user->auth_validate) {
            return $next($request);
        }
        return redirect()->route('2fa') ;
    }

    public function validate2fa(Request $request) {
        
        request()->validate([
            "code" => "required"
        ]);

        $user = User::where('id' , auth()->user()->id)->first();

        if ($request->code == $user->validation_code) {

            $user->auth_validate = true;
            $user->save();
            return redirect()->route("dashboard");
        } else {
            return back();
        }

    }
}
