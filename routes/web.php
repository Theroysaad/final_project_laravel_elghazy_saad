<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StripeController;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/admin' , [AdminController::class , 'index'])->name('admin.index');

    

Route::post('/place/store' , [PlaceController::class  , 'store'])->name("place.store");
Route::delete('/place/delete/{place}' , [PlaceController::class  , 'destroy'])->name("place.delete");

Route::put('/place/update/{place}' , [PlaceController::class  , 'update'])->name("place.update");

Route::get("/place/show/{product}", [PlaceController::class, "show"])->name("place.show");

Route::get('/' , [HomeController::class , 'index'])->name('home.index');
Route::get('/workspace' , [PlaceController::class , 'space'])->name('workspace.index');
Route::get('/reservation' , [ReservationController::class , 'index'])->name('reservation.index');
Route::get('/about' , [HomeController::class , 'about'])->name('about');
Route::get('/session' , [StripeController::class , 'session']);
Route::get('/success' , [StripeController::class , 'success'])->name('success');
Route::get('/contact' , [HomeController::class , 'contact'])->name('contact');


Route::post("/reservation/store" , [ReservationController::class , "store"]);
Route::get("/reservation/show" , [ReservationController::class , "show"]);
// change by siham
Route::get("/reservation/show/{workspaceId}" , [ReservationController::class , "showById"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
