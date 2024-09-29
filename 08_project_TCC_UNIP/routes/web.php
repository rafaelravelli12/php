<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::middleware(['check_global_role'])->group(function () {
        Route::get('/audit', [App\Http\Controllers\AuditController::class, 'audit']);
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    
    Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
    Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'create']);
    Route::post('/users/store', [App\Http\Controllers\UsersController::class, 'store']);
    Route::get('/users/{id}', [App\Http\Controllers\UsersController::class, 'view']);
    Route::get('/users/{id}/edit', [App\Http\Controllers\UsersController::class, 'edit']);
    Route::put('/users/{id}', [App\Http\Controllers\UsersController::class, 'update']);
    Route::get('/users/{id}/delete', [App\Http\Controllers\UsersController::class, 'deleteView']);
    Route::delete('/users/{id}', [App\Http\Controllers\UsersController::class, 'destroy']);
    
    Route::get('/establishments', [App\Http\Controllers\EstablishmentsController::class, 'index']);
    Route::get('/establishments/create', [App\Http\Controllers\EstablishmentsController::class, 'create']);
    Route::post('/establishments/store', [App\Http\Controllers\EstablishmentsController::class, 'store']);
    Route::get('/establishments/{id}', [App\Http\Controllers\EstablishmentsController::class, 'view']);
    Route::get('/establishments/{id}/edit', [App\Http\Controllers\EstablishmentsController::class, 'edit']);
    Route::put('/establishments/{id}', [App\Http\Controllers\EstablishmentsController::class, 'update']);
    Route::get('/establishments/{id}/delete', [App\Http\Controllers\EstablishmentsController::class, 'deleteView']);
    Route::delete('/establishments/{id}', [App\Http\Controllers\EstablishmentsController::class, 'destroy']);
    
    Route::get('/sales', [App\Http\Controllers\SalesController::class, 'index']);
    Route::get('/sales/create', [App\Http\Controllers\SalesController::class, 'create']);
    Route::get('/sales/{id}/qrcode', [App\Http\Controllers\SalesController::class, 'qrcode']);
    Route::post('/sales/store', [App\Http\Controllers\SalesController::class, 'store']);
    Route::get('/sales/{id}', [App\Http\Controllers\SalesController::class, 'view']);
    Route::get('/sales/{id}/edit', [App\Http\Controllers\SalesController::class, 'edit']);
    Route::put('/sales/{id}', [App\Http\Controllers\SalesController::class, 'update']);
    Route::get('/sales/{id}/delete', [App\Http\Controllers\SalesController::class, 'deleteView']);
    Route::delete('/sales/{id}', [App\Http\Controllers\SalesController::class, 'destroy']);

    Route::get('/clients', [App\Http\Controllers\ClientsController::class, 'index']);
    Route::get('/clients/create', [App\Http\Controllers\ClientsController::class, 'create']);
    Route::post('/clients/store', [App\Http\Controllers\ClientsController::class, 'store']);
    Route::get('/clients/{id}', [App\Http\Controllers\ClientsController::class, 'view']);
    Route::get('/clients/{id}/edit', [App\Http\Controllers\ClientsController::class, 'edit']);
    Route::put('/clients/{id}', [App\Http\Controllers\ClientsController::class, 'update']);
    Route::get('/clients/{id}/delete', [App\Http\Controllers\ClientsController::class, 'deleteView']);
    Route::delete('/clients/{id}', [App\Http\Controllers\ClientsController::class, 'destroy']);

    Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index']);
    Route::get('/products/create', [App\Http\Controllers\ProductsController::class, 'create']);
    Route::post('/products/store', [App\Http\Controllers\ProductsController::class, 'store']);
    Route::get('/products/{id}', [App\Http\Controllers\ProductsController::class, 'view']);
    Route::get('/products/{id}/edit', [App\Http\Controllers\ProductsController::class, 'edit']);
    Route::put('/products/{id}', [App\Http\Controllers\ProductsController::class, 'update']);
    Route::get('/products/{id}/delete', [App\Http\Controllers\ProductsController::class, 'deleteView']);
    Route::delete('/products/{id}', [App\Http\Controllers\ProductsController::class, 'destroy']);
});
