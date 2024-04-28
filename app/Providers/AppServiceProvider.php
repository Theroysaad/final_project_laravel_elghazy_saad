<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Places;
use App\Models\Types;
use App\Models\Reservation;

use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $places = Places::all();
        $types = Types::all();
        $reservations = Reservation::all();

        $users = User::all(); // Retrieve all users

        view()->share([
            'places' => $places,
            'types' => $types,
            'reservations' => $reservations,
            'users' => $users, // Pass all users to views
        ]);
    }
}
