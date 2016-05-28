<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExercicioDiario extends Model
{
    protected $fillable = [
        'data',
        'exercicio_id',
        'tempo_gasto',
        'calorias_gastas',
        'total_dia',
        'user_id'
    ];

    public function exercicio()
    {
      return $this->belongsTo(Exercicio::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
