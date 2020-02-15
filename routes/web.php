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
Route::get('/product/{productId}', 'Product\ProductController@show');
Route::get('/products', 'Product\ProductController@get');
Route::get('/mostExpensiveProduct', 'Product\ProductController@mostExpensiveProduct');
Route::put('/product/{productId}', 'Product\ProductController@update');
Route::post('/product', 'Product\ProductController@create');
Route::post('/product/productMaterials', 'Product\ProductMaterialController@createUsedMaterials');

