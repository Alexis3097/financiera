<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
class Prestamo extends Model
{
    public $table = "TblPrestamo";
    protected $primaryKey = 'IdPrestamo';
    protected $fillable = [
        'IdCliente','Cantidad','NumeroDePagos','Cuota','TotalPagar','FechaMinistracion','FechaVencimiento'
    ];

    public function Cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
