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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/results/', 'ProductsController@results')->name('products.results');
Route::resource('products', 'ProductsController');
Route::resource('users', 'UserController');
// Route::resource('brands', 'BrandController')->only (['show']);

Route::get('/brands/show/', 'BrandController@show')->name('brand.show');
