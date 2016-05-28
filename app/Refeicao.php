<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
     protected $fillable = [
        'data',
        'refeicao',
        'total_carboidratos',
        'total_calorias',
        'total_proteinas',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function alimentos()
    {
        return $this->hasMany(RefAlimento::class);
    }

    public function bebidas()
    {
        return $this->hasMany(RefBebida::class);
    }
}
