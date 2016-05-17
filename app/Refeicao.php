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
        'user_id'
    ];
}
