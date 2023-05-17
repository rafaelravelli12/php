<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/', function () { return redirect()->route('login'); });
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

Route::get('/tables/selectBookingDate', [TableController::class, 'selectBookingDate'])->middleware(['auth'])->name('tables.selectBookingDate');
Route::post('/tables/addBookingDate', [TableController::class, 'addBookingDate'])->middleware(['auth'])->name('tables.addBookingDate');
Route::get('/tables/{id}', [TableController::class, 'index'])->middleware(['auth'])->name('tables.index');
Route::get('/tables/addBooking/{id}', [TableController::class, 'addBooking'])->middleware(['auth'])->name('tables.addBooking');
Route::put('/tables/AddBookingPut', [TableController::class, 'AddBookingPut'])->middleware(['auth'])->name('tables.AddBookingPut');
Route::get('/tables/cancelBooking/{id}', [TableController::class, 'cancelBooking'])->middleware(['auth'])->name('tables.cancelBooking');
Route::put('/tables/cancelBookingPut', [TableController::class, 'cancelBookingPut'])->middleware(['auth'])->name('tables.cancelBookingPut');


require __DIR__.'/auth.php';
