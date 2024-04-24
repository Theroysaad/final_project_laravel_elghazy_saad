<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/' , [HomeController::class , 'index'])->name('home.index');
Route::get('/reservation' , [HomeController::class , 'reservation'])->name('reservation.index');
Route::get('/about' , [HomeController::class , 'about'])->name('about');
Route::get('/contact' , [HomeController::class , 'contact'])->name('contact');
Route::get('/session' , [StripeController::class , 'session']);
Route::get('/success' , [StripeController::class , 'success'])->name('success');


Route::post('/calendar/store' , [HomeController::class , 'store'])->name('calendar.store');
Route::get('/calendar/events' , [HomeController::class , 'show'])->name('calendar.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
