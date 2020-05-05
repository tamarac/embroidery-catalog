<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProduct;
use App\Http\Requests\UpdateProduct;
use App\Services\Product\ProductService;

class ProductController extends Controller
{
    public function show(int $productId)
    {
        return app(ProductService::class)->show($productId);
    }

    public function get()
    {
        return response()->json(['data' => app(ProductService::class)->get()->toArray()], 200);
    }

    public function create(CreateProduct $request)
    {
        return app(ProductService::class)->create($request->validated());
    }

    public function update($productId, UpdateProduct $request)
    {
        return app(ProductService::class)->update($productId, $request->validated());
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
