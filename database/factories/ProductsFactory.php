<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'price' => $faker->numberBetween(1000, 50000),
        'brand' => $faker->sentence(2),
        'category' => $faker->sentence(1, false),
    ];

    
});
