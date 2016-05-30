<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'fullname', 'sex', 'medico_id','email', 'type',
        'treatmenttype', 'weight', 'password'
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

    public function utentes()
    {
        return $this->hasMany(Utente::class, 'medico_id');
    }

    public function refeicoes()
    {
        return $this->hasMany(Refeicao::class);
    }

    public function exercicios()
    {
        return $this->hasMany(ExercicioDiario::class);
    }

    public function getUtentesIds()
    {
        return $this->utentes()->get()->map(function ($item, $key) {
            return $item->user_id;
        })->all();
    }

    public function notificacoes()
    {
        return $this->hasMany(Notifica::class);
    }

    public function exerciceInTheLast5Days()
    {
        return $this->exercicios()
            ->whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()])
            ->orderBy('created_at', 'DESC')
            ->get();
    }
}
