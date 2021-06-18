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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::middleware(['can:admin'])->prefix('admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/news', 'newsController@index');
    Route::delete('/news/delete/{id}','NewsController@newsDelete');
    Route::get('/news/createView', 'NewsController@newsCreateView');
    Route::post('/news/create','NewsController@newsCreate');
    Route::get('/news/editView/{id}','NewsController@newsEditView');
    Route::post('/news/edit/{id}', 'NewsController@newsEdit');

    ///
    Route::get('/purview', 'PurveiwController@index');
    Route::get('/purview/update/{role}/{id}','PurveiwController@purviewUpdate');
    Route::get('/account','AccountController@index' );
    Route::delete('/account/delete/{id}', 'AccountController@delete');
    Route::get('/account/createView', 'AccountController@createView');
    Route::post('/account/create', 'AccountController@create');
    Route::get('/account/editView/{id}','AccountController@editView' );
    Route::post('/account/edit/{id}','AccountController@edit' );


    ///
    Route::get('/products/type','ProductsController@typeIndex' );
    Route::get('/products/item','ProductsController@productsIndex' );
    ///
    Route::get('/products/type/create','ProductsController@typeCreate' );
    Route::post('/products/type/update','ProductsController@typeUpdate' );
    Route::get('/products/type/editView/{id}', 'ProductsController@typeEditView');
    Route::post('/products/type/edit/{id}', 'ProductsController@typeEdit');
    Route::delete('/products/type/delete/{id}', 'ProductsController@typeDelete');
    ///
    Route::get('/products/item/create', 'ProductsController@itemCreate');
    Route::post('/products/item/update', 'ProductsController@itemUpdate');
    Route::get('/products/item/editView/{id}', 'ProductsController@itemEditView');
    Route::post('/products/item/edit/{id}','ProductsController@itemEdit' );
    Route::delete('/products/item/delete/{id}', 'ProductsController@itemDelete');


    Route::post('/deleteImage','ProductsController@deleteImg');
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

