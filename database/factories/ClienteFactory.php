<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $faker->nombre,
        'telefono'=> $faker->telefono,
        'direccion' => $faker->direccion
    ];
});
