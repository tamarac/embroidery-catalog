<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(int $productId)
    {
        return app(ProductService::class)->show($productId);
    }

    public function get()
    {
        return app(ProductService::class)->get();
    }

    public function create(Request $request)
    {
        return app(ProductService::class)->create($request->all());
    }

    public function update($productId, Request $request)
    {
        return app(ProductService::class)->update($productId, $request->all());
    }

    public function mostExpensiveProduct()
    {
        return app(ProductService::class)->mostExpensiveProduct();
    }

    public function calcCostPrice($productId)
    {
        return app(ProductService::class)->calcCostPrice($productId);
    }
}
