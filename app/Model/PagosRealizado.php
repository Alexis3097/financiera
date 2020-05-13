<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Cliente;
class PagosRealizado extends Model
{
    public $table = "TblPagosRealizado";
    protected $primaryKey = 'IdPagosRealizado';
    protected $fillable = [
        'IdCliente','NumeroPago','Cantidad',
    ];

    public function Cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
