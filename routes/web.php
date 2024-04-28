<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TypeController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::post('/stripe/payment', [StripeController::class, 'session'])->name('session');
Route::get('/success', [StripeController::class, 'success'])->name('success');
// Route::get('/stripe/success', [StripeController::class, 'success'])->name('stripe.success');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store']);

Route::middleware('auth')->group(function () {
    // reservation
    Route::post("/reservation/store", [ReservationController::class, "store"]);
    Route::get("/reservation/show", [ReservationController::class, "show"])->middleware(['role:admin']); ///
    Route::get("/reservation/show/{placeId}", [ReservationController::class, "showById"]);
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/reservations/show', [AdminController::class, 'reservationShow'])->name('reservations.show')->middleware(['role:admin']);
    Route::delete('/reservations/delete/{reservation}', [ReservationController::class, 'delete'])->name("reservations.delete");
    Route::get('/workspace/{place}', [PlaceController::class, 'space'])->name('workspace.index');
    // places
    Route::post('/place/store', [PlaceController::class, 'store'])->name("place.store");
    Route::delete('/place/delete/{place}', [PlaceController::class, 'destroy'])->name("place.delete");
    Route::put('/place/update/{place}', [PlaceController::class, 'update'])->name("place.update");
    Route::get("/place/show/{product}", [PlaceController::class, "show"])->name("place.show");

    // admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware(['role:admin']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
