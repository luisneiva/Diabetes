<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use App\Refeicao;
use App\Bebida;
use App\Alimento;
use App\User;

class RefeicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('toninho');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allAlimentos=null;
        $allBebidas=[];

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
