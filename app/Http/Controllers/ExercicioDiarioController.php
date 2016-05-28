<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use App\ExercicioDiario;
use App\Exercicio;
use Auth;
use Carbon\Carbon;

class ExercicioDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $exercicioDiario = ExercicioDiario::get();
          $exercicios = Exercicio::get();


        return view('exercicioDiario/listExercicioDiario', compact('exercicioDiario', 'exercicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         // obtem a data de hoje
        $datas = explode(" ", Carbon::today());
        $data = $datas[0];

        $allExercicios=null;

        $exercicios = Exercicio::get();

         foreach ($exercicios as $exercicio){
            $allExercicios = array_add($allExercicios,$exercicio->id, $exercicio->tipo);
        }

        $exercicios = Auth::user()->exercicios()->where('data', $data)->get();

        return view('exercicioDiario.newExercicioDiario', compact('allExercicios', 'data', 'exercicios'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exercicioDiario = ExercicioDiario::create(Input::all());

        return redirect()->route('exerDiario.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercicios = Exercicio::get();
        $exercicioDiario = ExercicioDiario::findOrFail($id);
         return view('exercicioDiario/showExercicioDiario', compact('exercicios', 'exercicioDiario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $allExercicios=null;

        $exercicios = Exercicio::get();

         foreach ($exercicios as $exercicio){
            $allExercicios = array_add($allExercicios,$exercicio->id, $exercicio->tipo);
        }
         $data = Carbon::today();
        $exercicioDiario = ExercicioDiario::findOrFail($id);

        return view ('exercicioDiario/editExercicioDiario', compact('exercicioDiario','data', 'allExercicios'));
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

          $exercicioDiario = ExercicioDiario::find($id);
        $exercicioDiario->fill(Input::all());
        $exercicioDiario->save();
        return redirect()->route('exercicioDiario.index');
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
