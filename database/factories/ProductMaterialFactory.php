<?php

/**
 * @var \Illuminate\Database\Eloquent\Factory $factory 
 * 
 */

use App\Models\Material;
use App\Models\Product;
use App\Models\ProductMaterial;
use Faker\Generator as Faker;
use Faker\Provider\Lorem;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(
    ProductMaterial::class, 
    function (Faker $faker) {
        $faker->addProvider(new Lorem($faker));
        return [
            'product_id' => factory(Product::class)->create()->id,
            'material_id' => factory(Material::class)->create()->id,
        ];
    }
);
