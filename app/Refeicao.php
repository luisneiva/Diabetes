<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
     protected $fillable = [
        'user_id',
        'alimento_id',
        'bebida_id',
        'qtd_bebida',
        'qtd_alimento',
        'carboidartos'
    ];
}
