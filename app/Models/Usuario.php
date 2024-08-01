<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'phone',
        'pass',
        'fec_nacimiento',
        'id_tipo_usuario',
        'id_estado',
    ];

    protected $hidden = [
        'pass',
        'remember_token',
    ];

    protected $casts = [
        'fec_nacimiento' => 'date',
    ];

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class, 'id_tipo_usuario');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'id_usuario');
    }
}
