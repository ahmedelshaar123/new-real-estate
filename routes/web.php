<?php

Auth::routes();
Route::group(
    [
        'prefix'     => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::group(['namespace' => 'Web'], function () {

        //index route
        Route::get('/', 'IndexController@index');

    });
});


