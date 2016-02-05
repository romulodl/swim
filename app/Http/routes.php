<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('swimmers', 'SwimmerController');
    Route::resource('locations', 'LocationController');
    Route::resource('sessions', 'SessionController');
    Route::resource('emails', 'EmailController');
    Route::resource('groups', 'GroupController');
});
