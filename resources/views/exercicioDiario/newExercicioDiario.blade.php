@extends('layouts.app')

@section('content')
<script>
  var exercicios = {!! App\Exercicio::get() !!}
  var tempo =0;
   function normalizeValue (value) {
    if (isNaN(value) || value === '' || value < 1) { return 0 }

    return parseInt(value)
  }

  function getValue() {
    var selExercicio = document.getElementById("exercicio_id");

     //var qtdAlimento = normalizeValue(document.getElementById("qtd_alimento").value);
    var tempo = normalizeValue(document.getElementById('tempo_gasto').value);

    var caloriasGastas = 0;


    // obtem o valor calorico do exercicio
    for (var i = 0; i < exercicios.length; i++) {
      var curExercicio = exercicios[i];

      if (curExercicio.id === parseInt(selExercicio.value)) {

        caloriasGastas = (curExercicio.calorias_gastas * tempo)/30;

        break;
      }
    }
console.log(caloriasGastas);


    document.getElementById("calorias_gastas").value = caloriasGastas;

  }

</script>

@if (Session::has('message'))
    <div class="alert alert-danger">
        {{Session::get('message')}}
    </div>
@endif

<div class="container">

    <h1 class="text-center">Registo de Exercicio Diario</h1>

    <div class="panel panel-default">
        <div class="panel-heading">Exercicios de Hoje</div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <th>Tempo de exercicio (min)</th>
                    <th>Exercicio</th>
                    <th>Calorias gastas</th>
                </thead>

                <tbody>
                    @if (count($exercicios) === 0)
                    <tr>
                        <td colspan="3" class="text-center">
                            <b>Ainda não foram registados exercicios hoje!</b>
                        </td>
                    </tr>
                    @else
                        @foreach($exercicios as $exercicio)
                            <tr>
                                <td>{{ $exercicio->tempo_gasto }} minutos</td>
                                <td>{{ $exercicio->exercicio->tipo }}</td>
                                <td>{{ $exercicio->calorias_gastas }} kcal</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>


  {!! Form::open(['route'=> ['exerDiario.store']]) !!}
        <div class="panel panel-default">
            <div class="panel-heading">Registar Novo Exercicio Diario</div>
                <div class="panel-body">
                    {!! Form::hidden('user_id', Auth::user()->id) !!}
                    {!! Form::hidden('data', $data) !!}

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('tempo_gasto', 'Tempo de exercicio (min) :') !!}
                                {!! Form::text('tempo_gasto', 0, ['class'=> 'form-control', 'onmouseout'=>'getValue()']) !!}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('exercicio_id', 'Exercicio:') !!}
                                {!! Form::select('exercicio_id', $allExercicios,null, ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                {!! Form::label('calorias_gastas', 'Calorias gastas:') !!}
                                {!! Form::text('calorias_gastas', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                            </div>
                        </div>

                        <div class="col-md-12">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                            <a class="btn btn-primary btn-block" href="{{ url('exerDiario') }}">Voltar</a>
                            <input type="submit" class="btn btn-primary btn-block" value="Registar exercicio"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection