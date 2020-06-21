<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Flaite;
use Faker\Generator as Faker;

$factory->define(Flaite::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstName(),
        'provincia_id' => 1,
        'comuna_id' => 1,
        'cerro_id' => 1,
    ];
});
