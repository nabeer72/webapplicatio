<?php

use App\Http\Controllers\CarouselController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.layout.mainPage.home');
})->name('home');

Route::get('/detailServices', function () {
    return view('frontend.layout.servicesdetain.service');
})->name('detailServices');

// backend route for dashboard

Route::get('/dashboard', function () {
    return view('backend.layouts.screens.dashboard');
})->name('dashboard');

Route::resources([
    'carousel' => CarouselController::class,
]);
// carousel updaet and delete
Route::get('delete/carousel/{id}', [CarouselController::class, 'destroy'])->name('carousel-delete');
Route::post('update/carousel/{id}', [CarouselController::class, 'update'])->name('carousel-update');
