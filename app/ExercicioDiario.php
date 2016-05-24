<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercicioDiario extends Model
{
    protected $fillable = [
        'data',
        'exercicio_id',
        'tempo_gasto',
        'calorias_gastas'
    ];
}
