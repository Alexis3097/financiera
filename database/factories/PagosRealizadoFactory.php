<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\PagosRealizado;
use Faker\Generator as Faker;

$factory->define(PagosRealizado::class, function (Faker $faker) {
    return [
        'IdCliente' => $faker->IdClient,
        'NumeroPago' => $faker->NumeroPago,
        'Cantidad' => $faker->Cantidad
    ];
});
