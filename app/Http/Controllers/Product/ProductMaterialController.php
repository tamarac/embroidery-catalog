<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Services\ProductMaterialService;
use Illuminate\Http\Request;

class ProductMaterialController extends Controller
{
    public function createUsedMaterials(Request $request)
    {
        return app(ProductMaterialService::class)->create($request->all());
    }
}
