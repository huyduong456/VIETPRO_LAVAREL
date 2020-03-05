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


Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'

], function () {
    Route::resource('categories', 'CategoryController');
    Route::get('', 'DashboardController');
    Route::get('login', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@login');
    Route::post('logout', 'LoginController@logout');
    Route::group(['prefix' => 'orders'], function () {
        Route::get('', 'OrderController@index');
        Route::get('processed', 'OrderController@processed');
        Route::get('{order}/edit', 'OrderController@edit');
        Route::put('{order}', 'OrderController@update');

        });
    });

    Route::group(['prefix' => 'products'], function(){
        Route::get('', 'ProductController@index');
        Route::get('create', 'ProductController@create'); // sau @ là tên function
        Route::get('', 'ProductController@store');
        Route::get('{product}/edit', 'ProductController@edit');
        Route::put('{product}', 'ProductController@update');
        Route::delete('{product}', 'ProductController@destroy');
    });
    Route::resource('users', 'UserController');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'CategoryController@index');
        Route::get('create', 'CategoryController@create');
        Route::get('', 'CategoryController@store');
        Route::get('{category}/eidt', 'CategoryController@edit');
        Route::get('{category}', 'CategoryController@update');
        Route::delete('{category}', 'CategoryController@destroy');
    });
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('', 'DashboardController@dashboard');
    });
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::group(['prefix' => 'LoginController'], function () {
        Route::get('', 'LoginController@showLoginForm');
        Route::get('login', 'LoginController@login');
        Route::get('logout', 'LoginController@logout');
    });
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::group(['prefix' => 'OrderController'], function () {
        Route::get('', 'OrderController@index');
        Route::get('processed', 'OrderController@processed');
        Route::get('{OrderController}edit', 'OrderController@edit');
        Route::get('{OrderController}update', 'OrderController@update');
    });
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'CategoryController@index');
        Route::get('create', 'CategoryController@create');
        Route::get('', 'CategoryController@store');
        Route::get('{category}/eidt', 'CategoryController@edit');
        Route::get('{category}', 'CategoryController@update');
        Route::delete('{category}', 'ProductController@destroy');
    });
});


