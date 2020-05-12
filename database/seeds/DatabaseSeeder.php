<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ClienteSeeder::class);
         $this->call(PagosRealizadoSeeder::class);
         $this->call(PrestamoSeeder::class);





        //  DB::table('TblCliente')->insert([
        //     'Nombre' => Str::random(10),
        //     'Telefono' => Str::random(10),
        //     'Direccion' => Str::random(10),
        // ]);
    }
}
