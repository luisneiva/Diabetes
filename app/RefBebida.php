<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefBebida extends Model
{
    protected $fillable = [
      'refeicao_id',
      'bebida_id',
      'qtd'
    ];

    public function bebida()
    {
      return $this->belongsTo(Bebida::class);
    }
}
