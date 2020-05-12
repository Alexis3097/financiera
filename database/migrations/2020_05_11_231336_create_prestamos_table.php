<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblPrestamo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdCliente');
            $table->integer('Cantidad');
            $table->integer('NumeroDePagos');
            $table->decimal('Cuota');
            $table->decimal('TotalPagar');
            $table->dateTime('FechaMinistracion');
            $table->dateTime('FechaVencimiento');
            $table->timestamps();

            $table->foreign('IdCliente')
            ->references('IdCliente')
            ->on('TblCliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TblPrestamo');
    }
}
