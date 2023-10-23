<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //* this sends the user to the view page and adds the reservationView function to the page
    Route::get('/reservation/view', [ReservationController::class, 'reservationView'])->name('reservation.view');
    //* this sends the user to the create page and adds the reservationCreate function to the page
    Route::get('/reservation/create', [ReservationController::class, 'reservationCreate'])->name('reservation.create');
    //* this sends the user to the view page but makes the reservation and put it in the database and adds the reservationStore function to the page
    Route::post('/reservation/view', [ReservationController::class, 'reservationStore'])->name('reservation.store');
    //* this sends the user to the edit page and adds the reservationEdit function to the page
    Route::get('/reservation/{info}/edit', [ReservationController::class, 'reservationEdit'])->name('reservation.edit');
    //* this sends the user to the view page but updates the reservation and adds the reservationUpdate function to the page
    Route::put('/reservation/{info}/update', [ReservationController::class, 'reservationUpdate'])->name('reservation.update');
    //* this sends the user to the view page and deletes the reservation and adds the reservationDelete function to the page
    Route::get('/reservation/{info}/delete', [ReservationController::class, 'reservationDelete'])->name('reservation.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
