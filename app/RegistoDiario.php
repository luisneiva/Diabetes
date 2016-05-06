<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistoDiario extends Model
{
    protected $fillable = [
        'glicose',
        'user_id'
    ];
}
