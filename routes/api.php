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

/*Route::middleware('auth:api')->get(
    '/user', function (Request $request) {
        return $request->user();
    }
);*/
Route::post('/register', 'Auth\RegisterController@create');
Route::get('/product/{productId}', 'Product\ProductController@show');
Route::get('/products', 'Product\ProductController@get');
Route::get('/product/{productId}/calc', 'Product\ProductController@calcCostPrice');
Route::get('/product/mostExpensive', 'Product\ProductController@mostExpensiveProduct');
Route::put('/product/{productId}', 'Product\ProductController@update');
Route::post('/product', 'Product\ProductController@create');
Route::post('/product/productMaterials', 'Product\ProductMaterialController@createUsedMaterials');
//type list
Route::get('/types', 'Product\TypeController@get');
// material list
Route::get('/materials', 'Product\MaterialController@get');