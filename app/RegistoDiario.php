<?php

namespace App;

use Carbon\Carbon;

use DB;
use Auth;
use Illuminate\Database\Eloquent\Model;

class RegistoDiario extends Model
{
     protected $fillable = [
        'glicose',
        'total_carboidratos_ingeridos',
        'total_proteinas_ingeridas',
        'total_calorias_ingeridas',
        'calorias_gastas',
        'carboidratos_gastos',
        'proteinas_gastas',
        'user_id'
    ];

    public static function alertas()
    {
        // obtem a lista de ids dos utentes do medico logado
        $utentesIds = Auth::user()->utentes()->get()->map(function ($item, $key) {
            return $item->user_id;
        })->all();

        return RegistoDiario::select(DB::raw('count(*) as count, user_id, total_carboidratos_ingeridos, carboidratos_gastos, glicose, created_at'))
        ->whereBetween('created_at', [Carbon::now()->subWeek(), Carbon::now()])
        ->where('glicose', '>', 120)
        ->orWhere(function ($query) {
            return $query->where('glicose', '<', 90);
        })
        ->orWhere(function ($query) {
            return $query->whereRaw('total_carboidratos_ingeridos - carboidratos_gastos > 160');
        })
        ->whereIn('user_id', $utentesIds)
        ->groupBy('user_id')
        ->get();
    }
}
