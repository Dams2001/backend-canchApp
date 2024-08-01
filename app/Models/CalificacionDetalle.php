<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalificacionDetalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_calificacion',
        'descripcion',
        'fecha_hora',
        'puntaje',
        'id_estado',
    ];

    public function calificacion()
    {
        return $this->belongsTo(Reserva::class, 'id_calificacion');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }
}
