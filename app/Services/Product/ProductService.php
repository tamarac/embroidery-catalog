<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductService
{
    /**
     * Variable product
     *
     * @var Product $product
     */
    protected $product;

    /**
     * ProductService Constructor
     *
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;

        return $this;
    }
    
    /**
     * Show Product
     *
     * @param int $productId
     * @return Product 
     */
    public function show(int $productId): Product
    {
        return $this->product->with(
            [
                'productMaterials',
                'type',
            ]
        )->findOrFail($productId);
    }

    /**
     * Get Products
     *
     * @return array Product 
     */
    public function get()
    {
        return $this->product->orderBy('name')->get();
    }

    /**
     * Create Product
     *
     * @param array $params
     * @return Product 
     */
    public function create(array $params)
    {
        return $this->product->create($params);
    }

    /**
     * Update Product
     *
     * @param int $productId
     * @param array $params
     * @return Product 
     */
    public function update(int $productId, array $params)
    {
        $product = $this->product->findOrFail($productId);
        $product->update($params);
        
        return $product;
    }

    /**
     * This method returns the most expensive product registered.
     *
     * @return Product 
     */
    public function mostExpensiveProduct()
    {
        return $this->product->max('price');
    }

    /**
     * This method returns the cost price of the product considering 10% of profit
     *
     * @return double 
     */
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
