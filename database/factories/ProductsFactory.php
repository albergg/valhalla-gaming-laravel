<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 999999.99),
        'description' => $faker->paragraph(4, true),
        'image' => $faker->randomElement ([
            'amd.jpeg',
            'video-card.jpeg',
            'mother-gbt.jpg',
            'controler.jpeg',
            'cpu.jpeg',
            'giga.jpeg',
            'hardrive.jpeg',
            'headseat.jpeg',
            'keyboard.jpeg',
            'led.jpeg',
            'mouse.jpeg',
        ])
    ];

    
});
