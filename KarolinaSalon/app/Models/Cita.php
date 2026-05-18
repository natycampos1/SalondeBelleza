<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';

    protected $fillable = [
        'cliente_id',
        'usuario_id',
        'promocion_id',
        'fecha',
        'hora',
        'estado',
        'observaciones',
        'total',
    ];
}
