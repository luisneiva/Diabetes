<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
    protected $fillable = [
         'nome',
         'qtd',
         'calorias',
         'carboidratos',
         'proteinas'
    ];
}
