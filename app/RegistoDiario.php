<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistoDiario extends Model
{
     protected $fillable = [
        'glicose',
        'total_carboidratos_ingeridos',
        'total_proteinas_ingeridas',
        'total_calorias_ingeridas',
        'calorias_gastas',
        'carboidratos_gastos',
        'proteinas_gastas',
        'user_id'
    ];
}
