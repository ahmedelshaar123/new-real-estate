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
        //partners route
        Route::get('partners', 'PartnerController@index');
        //services route
        Route::get('services', 'ServiceController@index');
        //team route
        Route::get('team', 'TeamController@index');
        //contact route
        Route::get('contact-us', 'ContactController@index');
        //news route
        Route::get('posts', 'PostController@index');
        //about route
        Route::get('about', 'AboutController@index');
        //search route
        Route::get('search-news', 'SearchController@searchNews');
        //post contact route
        Route::post('contact-us', 'ContactController@contact')->name('contact-us');
        //email subscribe route
        Route::post('email-subscribe', 'EmailSubscribeController@subscribeEmail')->name('email-subscribe');

    });
});


