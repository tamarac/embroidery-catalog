<?php

namespace App\Services\Product;

use App\Models\ProductMaterial;

class ProductMaterialService 
{
    public function __construct(ProductMaterial $productMaterial)
    {
        $this->productMaterial = $productMaterial;

        return $this;
    }

    public function create(array $params)
    {
        return $this->productMaterial->create($params);
    }
}