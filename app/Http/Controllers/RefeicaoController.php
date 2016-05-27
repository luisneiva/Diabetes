<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use App\Refeicao;
use App\Bebida;
use App\Alimento;
use App\User;
use Auth;
class RefeicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actUser = Auth::user()->username;
        $refeicoes = Refeicao::get();
        $alimentos = Alimento::get();
        $bebidas = Bebida::get();


        return view('refeicao/listRefeicao', compact('refeicoes', 'actUser','bebidas', 'alimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allAlimentos=null;
        $allBebidas=null;

        $bebidas = Bebida::get();
        $alimentos = Alimento::get();

         foreach ($alimentos as $alimento){
            $allAlimentos = array_add($allAlimentos,$alimento->id, $alimento->nome);
        }

        foreach ($bebidas as $bebida){
            $allBebidas = array_add($allBebidas,$bebida->id, $bebida->nome);
        }
          return view('refeicao.newRefeicao', compact('bebidas', 'alimentos', 'allBebidas', 'allAlimentos') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $refeicao = Refeicao::create(Input::all());
        return redirect()->route('refeicao.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

     $refeicoes = Refeicao::findOrFail($id);

     $user = User::findOrFail($refeicoes->id);


     $bebida = Bebida::findOrFail($refeicoes->bebida_id);

     $alimento=Alimento::findOrFail($refeicoes->alimento_id);

    //dd($user->username, $bebida->nome, $alimento->nome);
     return view('refeicao/showRefeicao', compact('user', 'bebida', 'alimento', 'refeicoes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $allAlimentos=null;
        $allBebidas=null;

        $bebidas = Bebida::get();
        $alimentos = Alimento::get();

        $refeicao = Refeicao::findOrFail($id);

        foreach ($alimentos as $alimento){
            $allAlimentos = array_add($allAlimentos,$alimento->id, $alimento->nome);
        }

        foreach ($bebidas as $bebida){
            $allBebidas = array_add($allBebidas,$bebida->id, $bebida->nome);
        }

        return view('refeicao.editRefeicao', compact('refeicao', 'bebidas', 'alimentos', 'allBebidas', 'allAlimentos') );

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
        $refeicao = Refeicao::find($id);
        $refeicao->fill(Input::all());
        $refeicao->save();

        return redirect()->route('refeicao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Página de refeições
     */
    public function pageRefeicao()
    {
        return view('refeicao/pageRefeicao');
    }
}
