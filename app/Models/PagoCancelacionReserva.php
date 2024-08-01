<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoCancelacionReservas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_reserva',
        'id_usuario_negocio',
        'fecha_hora_registro',
        'id_tipo_de_pago',
        'nombre_cancelador',
        'plataforma',
        'telefono_cancelador',
    ];

    public function reserva()
    {
        return $this->belongsTo(Reserva::class, 'id_reserva');
    }

    public function usuarioNegocio()
    {
        return $this->belongsTo(UsuarioNegocio::class, 'id_usuario_negocio');
    }

    public function tipoDePago()
    {
        return $this->belongsTo(TipoDePago::class, 'id_tipo_de_pago');
    }
}
