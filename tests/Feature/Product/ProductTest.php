<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\MessageBag;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example show route.
     *
     * @return void
     */
    public function testShowProduct()
    {
        //Arange
        $product = factory(Product::class)->create();
        
        //Act
        $response = $this->get("api/product/{$product->id}");

        //Assert
        $response->assertStatus(200);
        $response->assertJson($product->toArray());
    }

    public function testGetProduct()
    {
        //Arange
        factory(Product::class, 3)->create()->sortBy('name');

        //Act
        $response = $this->get("api/products");

        //Assert
        $response->assertStatus(200);
    }

    public function testCreateProduct()
    {
        //Arange
        $product = factory(Product::class)->make();
       
        //Act
        $response = $this->post("api/product", $product->toArray());

        //Assert
        $response->assertStatus(201);
        $this->assertDatabaseHas('products', $product->toArray());
    }

    public function testCreateFailsProduct()
    {
        //Arange
        $product = factory(Product::class)->make();
        unset($product->name);

        //Act
        $response = $this->post("api/product", $product->toArray());

        //Assert
        $response->assertStatus(302);
        $response->assertSessionHasErrors(["name"]);
        $this->assertDatabaseMissing('products', $product->toArray());
    }

    public function testUpdateProduct()
    {
        //Arange
        $product = factory(Product::class)->create();
        $data = factory(Product::class)->make(['id' => $product->id]);

        //Act
        $response = $this->put("api/product/{$product->id}", $data->toArray());

        //Assert
        $response->assertStatus(200);
        $response->assertJson($data->toArray());
        $this->assertDatabaseHas('products', $data->toArray());
    }

    public function testWithoutNameUpdateProduct()
    {
        //Arange
        $product = factory(Product::class)->create();
        $data = factory(Product::class)->make(['id' => $product->id]);
        unset($data->name);
        //Act
        $response = $this->put("api/product/{$product->id}", $data->toArray());

        //Assert
        $response->assertStatus(200);
        $response->assertJson($data->toArray());
        $this->assertDatabaseHas('products', $data->toArray());
    }
    public function testUpdateProductWithNameNull()
    {
        //Arange
        $product = factory(Product::class)->create();
        $data = factory(Product::class)->make(['id' => $product->id, 'name' => null]);

        //Act
        $response = $this->put("api/product/{$product->id}", $data->toArray());

        //Assert
        $response->assertStatus(302);
        $response->assertSessionHasErrors(["name"]);
        $this->assertDatabaseMissing('products', $data->toArray());
    }
}
