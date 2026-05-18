<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table = 'promociones';

    protected $fillable = [
        'nombre',
        'dia_semana',
        'precio_especial',
        'activo',
    ];
}
