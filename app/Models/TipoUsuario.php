<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;

    protected $fillable = ['descripcion'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_tipo_usuario');
    }
}
