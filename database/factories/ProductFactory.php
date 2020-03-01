<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Type;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->text,
        'type_id'     => factory(Type::class)->create()->id,
    ];
});
