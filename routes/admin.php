<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
});

Auth::routes();
    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
        ], function () {

        Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
            //welcome route
            Route::get('/', function () {
                return view('admin.welcome');
            });
            Route::group(['middleware' => ['auth', 'role:Super Admin']], function () {
                //home route
                Route::get('/home', 'HomeController@index')->name('home');
                //users route
                Route::resource('users', 'UserController');
                //roles route
                Route::resource('roles', 'RoleController');
                //contacts route
                Route::resource('contacts', 'ContactController');
                //subscribers route
                Route::resource('subscribers', 'EmailSubscriptionController');
                //partners route
                Route::resource('partners', 'PartnerController');
                //services route
                Route::resource('services', 'ServiceController');
                //company team route
                Route::resource('company-team', 'CompanyTeamController');
                //posts route
                Route::resource('posts', 'PostController');
                //static pages route
                Route::get('static-pages', 'StaticPageController@index');
                Route::put('update-static-pages', 'StaticPageController@update')->name('static-pages.update');
                //top sliders route
                Route::resource('top-sliders', 'TopSliderController');
                //featured estates route
                Route::resource('featured-estates', 'FeaturedEstateController');
                //bottom sliders route
                Route::resource('bottom-sliders', 'BottomSliderController');
                //settings route
                Route::get('settings', 'SettingController@index');
                Route::put('update-settings', 'SettingController@update');
                //search route
                Route::get('search', 'SearchController@search');
            });
        });
    });
Route::get('admin/login', 'Auth\LoginController@showLoginForm');
Route::post('admin/login', 'Auth\LoginController@loginAdmin')->name('login-admin');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


