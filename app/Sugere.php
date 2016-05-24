<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugere extends Model
{
    protected $fillable = [
       'sugestao',
      'medico_id',
      'user_id'

}
