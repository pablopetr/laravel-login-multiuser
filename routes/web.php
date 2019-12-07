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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('/admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@index')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/create-product',  'ProductController@create')->name('createproduct')->middleware('auth:admin');
    Route::post('/create-product', 'ProductController@store')->middleware('auth:admin');
    Route::get('/create-category', 'CategoryController@create')->name('createcategory')->middleware('auth:admin');
    Route::post('/create-category', 'CategoryController@store')->middleware('auth:admin');
    Route::get('/delete-product/{id}', 'ProductController@destroy')->middleware('auth:admin');
    Route::get('/delete-category/{id}', 'CategoryController@destroy')->middleware('auth:admin');
});