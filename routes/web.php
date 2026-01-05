<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\FeatureServicesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $feature_services = \App\Models\FeatureServices::get();
    $skills = \App\Models\Skill::get();
    $stats = \App\Models\Status::get();
    return view('frontend.layout.mainPage.home', compact('feature_services', 'skills', 'stats'));
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
    'about' => AboutController::class,
    'feature_service' => FeatureServicesController::class,
    'skill' => SkillsController::class,
    'status' => StatusController::class,
]);
// carousel updaet and delete
Route::get('delete/carousel/{id}', [CarouselController::class, 'destroy'])->name('carousel-delete');
Route::post('update/carousel/{id}', [CarouselController::class, 'update'])->name('carousel-update');
// about updaet and delete
Route::get('delete/about/{id}', [AboutController::class, 'destroy'])->name('about-delete');
Route::post('update/about/{id}', [AboutController::class, 'update'])->name('about-update');
// feature_service updaet and delete
Route::get('delete/feature_service/{id}', [FeatureServicesController::class, 'destroy'])->name('feature_service-delete');
Route::post('update/feature_service/{id}', [FeatureServicesController::class, 'update'])->name('feature_service-update');
// skill updaet and delete
Route::get('delete/skill/{id}', [SkillsController::class, 'destroy'])->name('skill-delete');
Route::post('update/skill/{id}', [SkillsController::class, 'update'])->name('skill-update');
// status updaet and delete
Route::get('delete/status/{id}', [StatusController::class, 'destroy'])->name('status-delete');
Route::post('update/status/{id}', [StatusController::class, 'update'])->name('status-update');

