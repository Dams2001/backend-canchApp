<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $fillable = ['token', 'lat', 'lon'];

    public function usuarios()
    {
        return $this->belongsToMany(Usuario::class, 'usuario_dispositivo', 'dispositivo_id', 'usuario_id');
    }
}
