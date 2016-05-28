<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use App\Refeicao;
use App\Bebida;
use App\Alimento;
use App\User;
use App\RefAlimento;
use App\RefBebida;
use Auth;
use Carbon\Carbon;
use Alert;

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
        $refeicoes = Auth::user()->refeicoes()->orderBy('created_at', 'DESC')->take(5)->get();
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

        $data = Carbon::today();


          return view('refeicao.newRefeicao', compact('bebidas', 'alimentos', 'allBebidas', 'allAlimentos', 'data') );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // obtem a data de hoje
        $datas = explode(" ", Carbon::today());
        $data = $datas[0];

        // verifica se já existe uma entrada para esta refeição
        $count = Auth::user()->refeicoes()->where('data', $data)->where('refeicao', $request->get('refeicao'))->count();

        if ($count > 0) {
            return redirect()
                ->route('refeicao.create')
                ->with('msg', 'Refeicao já registada!');
        }

        $refeicao = Refeicao::create([
            'user_id' => Auth::user()->id,
            'data' => $data,
            'refeicao' => $request->get('refeicao'),
            'total_carboidratos' => $request->get('total_carboidratos'),
            'total_calorias' => $request->get('total_calorias'),
            'total_proteinas' => $request->get('total_proteinas')
        ]);

        foreach ($request->get('bebida_id') as $key => $value) {
            $refBebida = RefBebida::create([
                'refeicao_id' => $refeicao->id ,
                'bebida_id' => $value,
                'qtd' => $request->get('qtd_bebida')[$key]
            ]);
        }

         foreach ($request->get('alimento_id') as $key => $value) {
            $refAlimento = RefAlimento::create([
                'refeicao_id' => $refeicao->id ,
                'alimento_id' => $value,
                'qtd' => $request->get('qtd_alimento')[$key]
            ]);
        }

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
    public function pageRefeicao(Request $request)
    {
        // get current user
        $user = Auth::user();

        if ($user->type === 1 && in_array($request->get('utente'), $user->getUtentesIds())) { // medico
            $user = User::find($request->get('utente'));
        } else if ($user->type === 1 && !in_array($request->get('utente'), $user->getUtentesIds())) { // medico, mas não deste utente
            return redirect()->back();
        }

        // obtem as refeições
        $refeicoes = $user->refeicoes()->orderBy('created_at', 'DESC')->take(5)->get();

        return view('refeicao/pageRefeicao', compact('refeicoes', 'user'));
    }
}
