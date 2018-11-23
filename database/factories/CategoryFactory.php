<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement ([
            'Procesadores',
            'coolers',
            'cpus',
            'Mothers',
            'Placas de Video',
            'Almacenamiento',
            'Memorias Ram',
            'Gabinetes',
            'fuentes',
            'coolers',
            'Equipos y Notebooks',
            'Monitores',
            'Perifericos',
            'Consolas de Video Juego',
            'Muebles',
            'Software',
            'Conectividad',
            'Ropa, bolsos y mochilas',
            'Oficina',
            'Cables y cargadores',
        ])
    ];
});
