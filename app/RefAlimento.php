<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefAlimento extends Model
{
    protected $fillable = [
      'refeicao_id',
      'alimento_id',
      'qtd'
    ];

    public function alimento()
    {
      return $this->belongsTo(Alimento::class);
    }
}
