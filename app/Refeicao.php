<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
     protected $fillable = [
        'data',
        'refeicao',
        'alimento_id',
        'bebida_id',
        'qtd_bebida',
        'qtd_alimento',
        'total_carboidratos',
        'total_calorias',
        'total_proteinas',
        'user_id'
    ];
}
