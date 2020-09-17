<?php

/**
 * This file contains context of ProductMateral Model.
 */
namespace App\Services\Product;

use App\Models\ProductMaterial;

class ProductMaterialService 
{
    /**
     * ProductMaterialService Constructor
     *
     * @param ProductMaterial $productMaterial
     */
    public function __construct(ProductMaterial $productMaterial) 
    {
        $this->productMaterial = $productMaterial;
    }

    /**
     * Create ProductMaterial
     *
     * @param array $params
     * @return ProductMaterial
     */
    public function create(array $params): ProductMaterial
    {
        return $this->productMaterial->create($params);
    }
}
