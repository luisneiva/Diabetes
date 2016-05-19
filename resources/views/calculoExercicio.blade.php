@extends('welcome')

@section('content')

<script>

function normalizeValue (value) {
    if (isNaN(value) || value === '' || value < 1) { return 0 }

    return parseInt(value)
  }

function getValue() {

    var exercicios = {!! App\Exercicio::get() !!}
    var selExercicio = document.getElementById("tipo");
    var tempoGasto = document.getElementById('tempo');
    var calorias = 0;


    // obtem o valor calorico do exercicio
    for (var i = 0; i < exercicios.length; i++) {
      var curExercicio = exercicios[i];

      if (curExercicio.id === parseInt(selExercicio.value)) {

        calorias += curExercicio.calorias_gastas * parseInt(tempoGasto.value) / 30 ;

        console.log(calorias);
        break;
      }
    }
     document.getElementById("calorias_gastas").value = parseInt(calorias);


    }
</script>

<div class="container">
    <h1 class="text-center">Registo de exercicio</h1>



  {!! Form::open(['route'=> ['exercicio.store']]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tipo', 'Exercicio:') !!}
                    {!! Form::select('tipo', $allExercicios, ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tempo', 'Tempo de exercicio:') !!}
                    {!! Form::text('tempo', 0, ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('calorias_gastas', 'Quantidade de Calorias gastas:') !!}
                    {!! Form::text('calorias_gastas', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('exercicio') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar exercicio"/>
            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection