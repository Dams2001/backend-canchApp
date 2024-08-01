<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioServicio extends Model
{
    use HasFactory;

    protected $fillable = ['desde', 'hasta', 'id_servicio'];

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio');
    }
}
