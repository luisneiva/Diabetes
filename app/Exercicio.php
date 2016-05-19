<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
     protected $fillable = [
        'tipo',
        'calorias_gastas'
    ];
}
