<?php

use App\Http\HomeController;
use App\MoonShine\Controllers\MoonshineHome;
use App\MoonShine\Controllers\MoonshineSetting;
use App\MoonShine\Controllers\MoonshonSiteNew;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')
        ->name('home');
});

/**
 * админка
 */

Route::controller(MoonshineHome::class)->group(function () {
    Route::post('/moonshine/home', 'home');
});

Route::controller(MoonshonSiteNew::class)->group(function () {
    Route::post('/moonshine/site_new', 'site_new');
});


Route::controller(MoonshineSetting::class)->group(function () {
    Route::post('/moonshine/setting', 'setting');
});


/**
 * админка
 */
