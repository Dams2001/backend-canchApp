<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;

    protected $fillable = [
        'lat',
        'lon',
        'nombre',
        'cuit',
        'usuario_id',
        'descripcion',
        'id_tipo_negocio',
        'id_estado',
        'url_foto_perfil',
    ];

    public function tipoNegocio()
    {
        return $this->belongsTo(TipoNegocio::class, 'id_tipo_negocio');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
