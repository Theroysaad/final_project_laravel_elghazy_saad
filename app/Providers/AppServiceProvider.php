<?php

namespace App\Providers;

use App\Models\Places;
use App\Models\Types;
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
        view()->share(['places' => $places, 'types' => $types]);
    }
}
