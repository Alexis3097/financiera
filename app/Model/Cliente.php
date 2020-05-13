<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PagosRealizado;
use App\Model\Prestamo;
class Cliente extends Model
{
    //en ocaciones laravel no manda el mismo nombre de la tabla, para especificar se hace lo siguiente
    public $table = "TblCliente";
    protected $primaryKey = 'IdCliente';

    protected $fillable = [
        'nombre','telefono','direccion',
    ];

    //un cliente tiene varios pagos
    public function PagosRealizado()
    {
        return $this->hasMany(PagosRealizado::class);
    }
    //un cliente tiene varios prestamos
    public function Prestamo()
    {
        return $this->hasMany(Prestamo::class);
    }
}
