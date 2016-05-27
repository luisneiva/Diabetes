<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugere extends Model
{
 protected $fillable = [
      'sugestao',
      'user_id',
      'check'
    ];
}
