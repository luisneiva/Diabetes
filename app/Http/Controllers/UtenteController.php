<?php

namespace App\Http\Controllers;

use Auth;

use App\Utente;
use App\Medico;
use App\RegistoDiario;
use Illuminate\Http\Request;

use App\Http\Requests;
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
        $utente = Utente::findOrFail($id);
        $user = Auth::user()->id;
        $registos = RegistoDiario::where('user_id', $user)->orderBy('created_at', 'DESC')->take(5)->get();

        return view('utente/showUtente', compact('utente', 'registos'));
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
