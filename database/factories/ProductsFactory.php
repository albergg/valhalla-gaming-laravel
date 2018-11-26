<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999999.99),
        'description' => $faker->paragraph(4, true),
    ];

    
});
