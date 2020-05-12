<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\PagosRealizado;
use App\Model\Prestamo;
class Cliente extends Model
{
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
