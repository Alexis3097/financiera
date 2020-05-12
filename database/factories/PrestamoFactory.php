<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Prestamo;
use Faker\Generator as Faker;

$factory->define(Prestamo::class, function (Faker $faker) {
    return [
        'Id_Cliente' => $faker->Id_Cliente,
        'Cantidad'=> $faker->Cantidad,
        'NumeroDePagos' => $faker->NumeroDePagos,
        'Cuota' => $faker->Cuota,
        'TotalPagar'=> $faker->TotalPagar,
        'FechaMinistracion' => $faker->FechaMinistracion,
        'FechaVencimiento' => $faker->FechaVencimiento,
    ];
});
