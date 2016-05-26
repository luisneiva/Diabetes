<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifica extends Model
{
   protected $fillable = [
      'notificacao',
      'user_id'
    ];
}
