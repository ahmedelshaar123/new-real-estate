<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/clear', function () {
//    \Illuminate\Support\Facades\Artisan::call('config:clear');
//    \Illuminate\Support\Facades\Artisan::call('cache:clear');
//});
//
//Auth::routes();
////Route::group(
////    [
////        'prefix'     => LaravelLocalization::setLocale(),
////        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
////    ], function () {
//
//    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//
//        //contacts route
//        Route::resource('contacts', 'ContactController');
//        //subscribers route
//        Route::resource('subscribers', 'EmailSubscriptionController');
//        //partners route
//        Route::resource('partners', 'PartnerController');
//        //services route
//        Route::resource('services', 'ServiceController');
//        //company team route
//        Route::resource('company-team', 'CompanyTeamController');
//        //posts route
//        Route::resource('posts', 'PostController');
//        //settings route
//        Route::resource('settings', 'SettingController');
//        //static pages route
//        Route::resource('static-pages', 'StaticPageController');
//        //top sliders route
//        Route::resource('top-sliders', 'TopSliderController');
//        //featured estates route
//        Route::resource('featured-estates', 'FeaturedEstateController');
//        //bottom sliders route
//        Route::resource('bottom-sliders', 'BottomSliderController');
//    });
////});
//
//        Route::get('/home', 'HomeController@index')->name('home');
