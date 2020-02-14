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
Route::get('/product/{productId}', 'ProductController@show');
Route::get('/products', 'ProductController@get');
Route::get('/mostExpensiveProduct', 'ProductController@mostExpensiveProduct');
Route::put('/product/{productId}', 'ProductController@update');
Route::post('/product', 'ProductController@create');
Route::get('/', function () {
    return view('welcome');
});
