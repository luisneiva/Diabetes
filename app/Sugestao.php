<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugestao extends Model
{
  protected $fillable = [
      'sugestao',
      'user_id'
    ];
}
