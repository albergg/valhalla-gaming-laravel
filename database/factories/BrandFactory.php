<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement ([
            'Msi',
            'Asus',
            'Gigabyte',
            'Asrock',
            'Sentey',
            'Thermaltake',
            'Evga',
            'Sfx',
            'Kingston',
            'Corsair',
            'Hyperx',
            'Crucial',
            'Mushkin',
            'Otras',
        ])
    ];
});
