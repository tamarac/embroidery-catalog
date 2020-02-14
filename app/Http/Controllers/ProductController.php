<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProduct;
use App\Services\Product\ProductService;

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

    public function create(CreateProduct $request)
    {
        $validated = $request->validated();
        var_dump($validated);
        return app(ProductService::class)->create($request);
    }

    public function mostExpensiveProduct()
    {
        return app(ProductService::class)->mostExpensiveProduct();
    }
}
  