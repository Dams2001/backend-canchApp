<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioDelSistema extends Model
{
    use HasFactory;

    protected $fillable = ['precio', 'descripcion', 'id_negocio'];

    public function negocio()
    {
        return $this->belongsTo(Negocio::class, 'id_negocio');
    }
}
