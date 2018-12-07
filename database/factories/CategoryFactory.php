<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement ([
            'Procesadores',
            'Coolers',
            'Cpus',
            'Mothers',
            'Placas de Video',
            'Almacenamiento',
            'Memorias Ram',
            'Gabinetes',
            'Fuentes',
            'Coolers',
            'Equipos y Notebooks',
            'Monitores',
            'Perifericos',
            'Consolas de Video Juego',
            'Software',
            'Conectividad',
            'Otros',
        ])
    ];
});
