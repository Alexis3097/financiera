<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosRealizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TblPagoRealizado', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdCliente');
            $table->integer('NumeroPago');
            $table->decimal('Cantidad');
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
        Schema::dropIfExists('TblPagoRealizado');
    }
}
