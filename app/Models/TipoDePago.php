<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDePago extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function pagosCancelacionReservas()
    {
        return $this->hasMany(PagoCancelacionReservas::class, 'id_tipo_de_pago');
    }
}
