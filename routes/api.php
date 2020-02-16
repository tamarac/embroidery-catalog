<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('guest')->post('/register', 'Auth\RegisterController@create');
Route::middleware('guest')->get('/product/{productId}', 'Product\ProductController@show');
Route::middleware('guest')->get('/products', 'Product\ProductController@get');
Route::middleware('guest')->get('/product/{productId}/calc', 'Product\ProductController@calcCostPrice');
Route::middleware('guest')->get('/product/mostExpensive', 'Product\ProductController@mostExpensiveProduct');
Route::middleware('guest')->put('/product/{productId}', 'Product\ProductController@update');
Route::middleware('guest')->post('/product', 'Product\ProductController@create');
Route::middleware('guest')->post('/product/productMaterials', 'Product\ProductMaterialController@createUsedMaterials');
//type list
Route::middleware('guest')->get('/types', 'Product\TypeController@get');
// material list
Route::middleware('guest')->get('/materials', 'Product\MaterialController@get');