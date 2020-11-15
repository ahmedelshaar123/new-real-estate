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
        Route::get('partners', 'PartnerController@index');
        Route::get('services', 'ServiceController@index');
        Route::get('team', 'TeamController@index');
        Route::get('contact-us', 'ContactController@index');
        Route::get('posts', 'PostController@index');
        Route::post('contact-us', 'ContactController@contact')->name('contact-us');

    });
});


