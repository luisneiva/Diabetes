<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    protected $fillable = [
        'mensagem',
        'user_id'
    ];
}
