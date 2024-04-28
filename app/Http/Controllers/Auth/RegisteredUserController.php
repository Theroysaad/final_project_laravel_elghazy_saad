<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home.index', absolute: false));
    }


    // public function showReservations($userId)
    // {
    //     // Find the user by ID
    //     $user = User::findOrFail($userId);

    //     // Get the reservations for the user
    //     $reservations = $user->reservations;

    //     // Return a view with the reservations
    //     return view('reservations.index', compact('reservations'));
    // }

    public function show($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Load the user's reservations
        $reservations = $user->reservations;

        // Pass the user and reservations to the view
        return view('users.show', compact('user', 'reservations'));
    }


}
