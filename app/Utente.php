<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'fullname', 'gender', 'medico_id', 'type', 'treatmenttype', 'weight', 'user_id'
    ];

    public function medico()
    {
      return $this->belongsTo(Medico::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
