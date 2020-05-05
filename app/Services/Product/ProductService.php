<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductService
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;

        return $this;
    }

    public function show(int $productId)
    {
        return $this->product->with(
            [
                'productMaterials',
                'type',
            ]
        )->findOrFail($productId);
    }

    public function get()
    {
        return $this->product->orderBy('name')->get();
    }

    public function create(array $params)
    {
        return $this->product->create($params);
    }

    public function update(int $productId, array $params)
    {
        $product = $this->product->findOrFail($productId);
        $product->update($params);
        
        return $product;
    }

    public function mostExpensiveProduct()
    {
        return $this->product->max('price');
    }

    public function calcCostPrice($productId)
    {
        $totalPriceByMaterialList = $this->product->find($productId)
            ->productMaterials
            ->sum('price');

        return ($totalPriceByMaterialList * 0.10) + $totalPriceByMaterialList;
    }

    public function calcPrice($costPrice)
    {
        return ($costPrice * 0.50) + $costPrice;
    }
}
