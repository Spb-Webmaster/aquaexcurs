<?php

use App\Http\Controllers\SiteNew\SiteNewController;
use App\Http\HomeController;
use App\MoonShine\Controllers\MoonshineHome;
use App\MoonShine\Controllers\MoonshineSetting;
use App\MoonShine\Controllers\MoonshonSiteNew;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'index')
        ->name('home');
});

Route::controller(SiteNewController::class)->group(function () {

    Route::get('news/{slug}', 'site_new')
        ->name('site_new');

    Route::get('news', 'site_news')
        ->name('site_news');

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
