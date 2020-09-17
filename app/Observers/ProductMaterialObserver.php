<?php

namespace App\Observers;

use App\Models\ProductMaterial;
use App\Services\Product\ProductService;

class ProductMaterialObserver
{
    /**
     * Handle the product material "created" event.
     *
     * @param  \App\ProductMaterial  $productMaterial
     * @return void
     */
    public function created(ProductMaterial $productMaterial)
    {
        $this->calc($productMaterial);
    }


    /**
     * Handle the product material "deleted" event.
     *
     * @param  \App\ProductMaterial  $productMaterial
     * @return void
     */
    public function deleted(ProductMaterial $productMaterial)
    {
        $this->calc($productMaterial);
    }

    /**
     * Handle the product material "force deleted" event.
     *
     * @param  \App\ProductMaterial  $productMaterial
     * @return void
     */
    public function forceDeleted(ProductMaterial $productMaterial)
    {
        $this->calc($productMaterial);
    }

    public function calc($productMaterial)
    {
        $costPrice = app(ProductService::class)
            ->calcCostPrice($productMaterial->product_id);

        $price = app(ProductService::class)->calcPrice($costPrice);

        app(ProductService::class)->update($productMaterial->product_id, [
            'price' => $price,
            'cost_price' => $costPrice
        ]);
    }
}
