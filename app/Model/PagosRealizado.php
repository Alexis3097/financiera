<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
class PagosRealizado extends Model
{
    protected $fillable = [
        'IdCliente','NumeroPago','Cantidad',
    ];

    public function Cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
