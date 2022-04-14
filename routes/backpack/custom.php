<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('tour', 'TourCrudController');

    Route::crud('reservation', 'ReservationCrudController');
    Route::crud('participant', 'ParticipantCrudController');
    Route::crud('statistic', 'StatisticCrudController');
    Route::crud('theme', 'ThemeCrudController');
    Route::get('/print', function () {
        return view ('print');
    });
    Route::crud('theme', 'ThemeCrudController');
    Route::crud('reservation', 'ReservationCrudController');

}); // this should be the absolute last line of this file