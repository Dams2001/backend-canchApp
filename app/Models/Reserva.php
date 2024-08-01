<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario',
        'id_tipo_servicio',
        'fecha_hora_reserva',
        'fecha_hora_inicio',
        'fecha_hora_fin',
        'id_estado',
        'calificacion_experiencia',
        'cantidad',
        'monto_pendiente',
        'fecha_hora_cambio_estado',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function tipoServicio()
    {
        return $this->belongsTo(TipoServicio::class, 'id_tipo_servicio');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
