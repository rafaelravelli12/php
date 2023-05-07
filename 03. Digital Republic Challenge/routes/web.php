<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('first');
})->name('first');

Route::post('/submit-form', [ProjectController::class, 'submitForm'])->name('submit-form');
