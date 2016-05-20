<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $append = ['shortName'];

    public function utente() {
        return $this->hasOne(Utente::class);
    }

    public function getShortNameAttribute() {
        // quando o utente ainda não está registado deve ser devolvido o email, uma vez
        // que ainda não temos o fullname
        if ($this->utente === null) {
            return  $this->email;
        }

        $split = explode(' ', $this->utente->fullname);
        $len = count($split);

        if ($len > 2) {
            return $split[0] . ' ' . $split[$len - 1];
        }

        return $this->utente->fullname;
    }
}
