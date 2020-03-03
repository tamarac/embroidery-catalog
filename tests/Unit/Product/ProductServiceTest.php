<?php

namespace Tests\Unit\Product;

use App\Models\Material;
use App\Models\Product;
use App\Models\ProductMaterial;
use App\Services\Product\ProductService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductServiceTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A Test create Product.
     *
     * @return void
     */
    public function testCreateProduct()
    {
        // Arange
        $productCreates = factory(Product::class)->make()->toArray();

        // Act
        $created = app(ProductService::class)->create($productCreates);

        // Assert
        $this->assertDatabaseHas('products', $productCreates);
    }

    /**
     * A Test show Product.
     *
     * @return void
     */
    public function testShowProduct()
    {
        // Arange
        $product = factory(Product::class)->create();
        $product->load('type', 'productMaterials');

        // Act
        $show = app(ProductService::class)->show($product->id);

        // Assert
        $this->assertEquals($show->toArray(), $product->toArray());
    }

    /**
     * A Test get Product.
     *
     * @return void
     */
    public function testGetProduct()
    {
        // Arange
        $product = factory(Product::class, 2)->create();

        // Act
        $show = app(ProductService::class)->get();
       
        // Assert
        $this->assertCount(2, $show->toArray());
    }

    /**
     * A Test Update Product.
     *
     * @return void
     */
    public function testUpdateProduct()
    {
        // Arange
        $product = factory(Product::class)->create();
        $productUpdates = factory(Product::class)->make(
            [
                'id' => $product->id
            ]
        )->toArray();

        // Act
        $updated = app(ProductService::class)->update($product->id, $productUpdates);
       
        // Assert
        $this->assertDatabaseHas('products', $productUpdates);
    }

    /**
     * A Test Update Product.
     *
     * @return void
     */
    public function testDontUpdatedProduct()
    {
        // Arange
        $productUpdates = factory(Product::class)->make()->toArray();

        // Act assert
        $this->expectException(ModelNotFoundException::class);
        app(ProductService::class)->update(1, $productUpdates);
       
    }

    /**
     * A Test Update Product.
     *
     * @return void
     */
    public function testMostExpensiveProduct()
    {
        // Arange
        $material = factory(Material::class)->create(['price' => rand(13, 25)]);
        $productMaterial = factory(ProductMaterial::class)->create(
            [
                'material_id' => $material->id
            ]
        );

        factory(ProductMaterial::class, 5)->create();
        
        // Act
        $countValueCostPrice = ($material->price * 0.10) + $material->price;
        $value = app(ProductService::class)->mostExpensiveProduct();

        // Assert
        $this->assertEquals(($countValueCostPrice * 0.50) + $countValueCostPrice, $value);
    }

    /**
     * A Test CalcCostPrice Product.
     *
     * @return void
     */
    public function testCalcCostPrice()
    {
        // Arange
        $material = factory(Material::class)->create(['price' => rand(13, 25)]);
        $productMaterial = factory(ProductMaterial::class)->create(
            [
                'material_id' => $material->id
            ]
        );
        
        // Act
        $value = app(ProductService::class)
            ->calcCostPrice($productMaterial->product_id);
        $countValueCostPrice = ($material->price * 0.10) + $material->price;
        // Assert
        $this->assertEquals(($material->price * 0.10) + $material->price, $value);
    }

    /**
     * A Test CalcPrice Product.
     *
     * @return void
     */
    public function testCalcPrice()
    {
        // Arange
        $costPrice = rand(13, 25);
    
        
        // Act
        $value = app(ProductService::class)
            ->calcPrice($costPrice);

        // Assert
        $this->assertEquals(($costPrice * 0.50) + $costPrice, $value);
    }
}
