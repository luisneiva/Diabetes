<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
     protected $fillable = [
        'alimento_id',
        'bebida_id',
        'qtd_bebida',
        'qtd_alimento',
        'total_carboidratos',
        'calorias',
        'proteinas',
        'user_id'
    ];
}
