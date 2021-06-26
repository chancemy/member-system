<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontController@index');

Route::prefix('user')->group(function(){
    Route::prefix('/shop_cart')->group(function(){
        Route::get('/step1','FrontController@step1');
        Route::get('/step2','FrontController@step2');
        Route::get('/step3','FrontController@step3');
        Route::get('/step4','FrontController@step4');
    });

    Route::prefix('/contact_us')->group(function(){
        Route::get('/create','FrontController@contactUsView' );
        Route::post('/store', 'FrontController@store');
    });
    Route::prefix('/products')->group(function(){
        Route::get('item', 'FrontController@productsView');
    });
});
// Auth::routes();
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('/contact_us')->group(function(){
        Route::get('/', 'ContactUsController@adminIndex' );
        Route::get('/read/{id}','ContactUsController@read' );
        Route::delete('/delete/{id}', 'ContactUsController@delete' );

    });

    Route::prefix('/news')->group(function () {
        Route::get('/', 'newsController@index');
        Route::delete('/delete/{id}', 'NewsController@newsDelete');
        Route::get('/createView', 'NewsController@newsCreateView');
        Route::post('/create', 'NewsController@newsCreate');
        Route::get('/editView/{id}', 'NewsController@newsEditView');
        Route::post('/edit/{id}', 'NewsController@newsEdit');
    });

    Route::prefix('/account')->group(function () {
        Route::get('/', 'AccountController@index');
        Route::delete('/delete/{id}', 'AccountController@delete');
        Route::get('/createView', 'AccountController@createView');
        Route::post('/create', 'AccountController@create');
        Route::get('/editView/{id}', 'AccountController@editView');
        Route::post('/edit/{id}', 'AccountController@edit');
    });
    ///
    Route::get('/purview', 'PurveiwController@index');
    Route::get('/purview/update/{role}/{id}', 'PurveiwController@purviewUpdate');

    Route::prefix('/products')->group(function () {
        Route::prefix('/type')->group(function () {
            Route::get('/', 'ProductsController@typeIndex');
            ///
            Route::get('/create', 'ProductsController@typeCreate');
            Route::post('/update', 'ProductsController@typeUpdate');
            Route::get('/editView/{id}', 'ProductsController@typeEditView');
            Route::post('/edit/{id}', 'ProductsController@typeEdit');
            Route::delete('/delete/{id}', 'ProductsController@typeDelete');
        });
        Route::prefix('/item')->group(function () {
            Route::get('/', 'ProductsController@productsIndex');
            ///
            Route::get('/create', 'ProductsController@itemCreate');
            Route::post('/update', 'ProductsController@itemUpdate');
            Route::get('/editView/{id}', 'ProductsController@itemEditView');
            Route::post('/edit/{id}', 'ProductsController@itemEdit');
            Route::delete('/delete/{id}', 'ProductsController@itemDelete');
        });
    });

    ///
    Route::post('/deleteImage', 'ProductsController@deleteImg');
});



// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
//
