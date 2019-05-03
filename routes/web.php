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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('Color', 'ColorController');
Route::resource('Client', 'ClientController');
Route::resource('Size', 'SizeController');
Route::resource('Brand', 'BrandController');
Route::resource('Category', 'CategoryController');
Route::resource('Rol', 'RolController');
Route::resource('Purchase', 'PurchaseController');
Route::resource('Wholeseller', 'WholesellerController');
Route::resource('Shoes', 'ShoesController');


