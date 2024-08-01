<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoServicio extends Model
{
    use HasFactory;

    protected $fillable = ['id_tipo_servicio', 'url_imagen'];

    public function tipoServicio()
    {
        return $this->belongsTo(TipoServicio::class, 'id_tipo_servicio');
    }
}
