<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\RegistoDiario;
use App\Utente;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UtenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // obtem o medico logado
        $utentes = Auth::user()->utentes;

        return view('utente/listUtentes', compact('utentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utente.newUtente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // definir o user_id
        $data['user_id'] = Auth::user()->id;

        // cria o novo utente
        $utente = Utente::create($data);

        return redirect()->route('utente.show', $utente->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aux =0;
        $alimError = 0;
        $exercError = 0;
        $exercSucess = 0;
        $glicError = 0;

        $utente = Utente::findOrFail($id);
        $user = Auth::user()->id;
        $registos = RegistoDiario::where('user_id', $user)->orderBy('created_at', 'DESC')->take(5)->get();

        foreach ($registos as $registo){
            $aux = ($registo->total_carboidratos_ingeridos)- ($registo->carboidratos_gastos);
            if($aux < 0)
                $exercError ++;
            if($aux > 0)
                $exercSucess ++;
            if($aux > 160)
                $alimError ++;

            if(($registo->glicose > 120) || ($registo->glicose <90))
                $glicError ++;

        }
        return view('utente/showUtente', compact('utente', 'registos', 'user', 'alimError', 'exercError', 'glicError', 'exercSucess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utente = Utente::findOrFail($id);
        return view('utente/editUtente', compact('utente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $utente = Utente::find($id);
        $utente->fill(Input::all());
        $utente->save();
        return redirect()->route('utente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utente = Utente::find('$id');
        $utente->delete();
        return redirect()->back();
    }

    /**
     * Rota para a página dicas
     */
    public function dicas()
    {
        return view('dicas');
    }
}
