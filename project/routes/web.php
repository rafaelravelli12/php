<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSliderController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\PortfolioController;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'profile')->name('admin.profile');
    Route::get('/edit/profile', 'editProfile')->name('edit.profile');
    Route::post('/store/profile', 'storeProfile')->name('store.profile');
    Route::get('/change/password', 'changePassword')->name('change.password');
    Route::post('/update/password', 'updatePassword')->name('update.password');
});

Route::controller(HomeSliderController::class)->group(function () {
    Route::get('/home/slide', 'homeSlider')->name('home.slide');
    Route::post('/update/slide', 'updateSlider')->name('update.slide');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about/page', 'aboutPage')->name('about.page');
    Route::post('/update/about', 'updateAbout')->name('update.about');
    Route::get('/about', 'homeAbout')->name('home.about');
    Route::get('/about/multi/image', 'aboutMultiImage')->name('about.multi.image');
    Route::post('/store/multi/image', 'storeMultiImage')->name('store.multi.image');
    Route::get('/all/multi/image', 'allMultiImage') -> name('all.multi.image');
    Route::get('/edit/multi/image/{id}', 'editMultiImage') -> name('edit.multi.image');
    Route::post('/update/multi/image', 'updateMultiImage') -> name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'deleteMultiImage') -> name('delete.multi.image');
});

Route::controller(PortfolioController::class) -> group(function () {
    Route::get('/all/portfolio', 'AllPortfolio') -> name('all.portfolio');
    Route::get('/add/portfolio', 'AddPortfolio') -> name('add.portfolio');
    Route::post('/store/portfolio', 'StorePortfolio') -> name('store.portfolio');
    Route::get('/edit/portfolio/{id}', 'EditPortfolio') -> name('edit.portfolio');
    Route::post('/update/portfolio', 'UpdatePortfolio') -> name('update.portfolio');
    Route::get('/delete/portfolio/{id}', 'DeletePortfolio') -> name('delete.portfolio');
    Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');
});

require __DIR__ . '/auth.php';
