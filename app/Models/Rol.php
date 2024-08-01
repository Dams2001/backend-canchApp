<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function usuariosNegocio()
    {
        return $this->hasMany(UsuarioNegocio::class, 'rol_id');
    }
}
