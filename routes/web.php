<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.layout.mainPage.home');
})->name('home');

Route::get('/detailServices', function () {
    return view('frontend.layout.servicesdetain.service');
})->name('detailServices');

