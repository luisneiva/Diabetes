<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;
use Auth;
use App\Utente;
use App\Refeicao;
use App\RegistoDiario;

class RegistoDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // obtem o utente
        if ($request->has('utente') && $request->get('utente') != '') {
            $user_id = $request->get('utente');
        } else {
            $user_id = Auth::user()->id;
        }

        $registos = RegistoDiario::where('user_id', $user_id)->get();
        return view('registo/listRegistos', compact('registos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refeicaos= Refeicao::get();
        return view('registo.newRegisto', compact('refeicaos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registo = RegistoDiario::create(Input::all());
        //dd(intval($registo->glicose));
        if(intval($registo->glicose) > 120 )
           return redirect()->route('registo.create')->with('message', 'Registo criado com sucesso!  cuidado !!! valor inserido fora do normal');
        if(intval($registo->glicose) <90 ){
            return redirect()->route('registo.create')->with('message', 'Registo criado com sucesso! cuidado !!! valor inserido fora do normal');
        }else{
            return redirect()->route('registo.create')->with('message', 'Registo criado com sucesso!');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $registo = RegistoDiario::findOrFail($id);

        return view('registo/showRegisto', compact('registo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registo = RegistoDiario::findOrFail($id);

        return view('registo/editRegisto', compact('registo'));
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
        $registo = RegistoDiario::find($id);
        $registo->fill(Input::all());
        $registo->save();
        return redirect()->route('registo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registo = RegistoDiario::find($id);
        $registo->delete();

        return redirect()->back();
    }
}
