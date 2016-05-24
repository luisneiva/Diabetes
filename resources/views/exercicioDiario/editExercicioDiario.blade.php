@extends('welcome')

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


<div class="container">
    <h1 class="text-center">Registo de Exercicio Diario</h1>



  {!! Form::open(['route'=> ['exerDiario.update', $exercicioDiario->id], 'method' => 'PUT']) !!}
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Exercicio Diario</div>
                    <div class="panel-body">
                        {!! Form::hidden('user_id', Auth::user()->id) !!}
                        {!! Form::hidden('data', $data) !!}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('tempo_gasto', 'Tempo de exercicio (min) :') !!}
                                    {!! Form::text('tempo_gasto', $exercicioDiario->tempo_gasto, ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('exercicio_id', 'Exercicio:') !!}
                                    {!! Form::select('exercicio_id', $allExercicios,null, ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('calorias_gastas', 'Calorias gastas:') !!}
                                    {!! Form::text('calorias_gastas', $exercicioDiario->calorias_gastas, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                        <div class="row">
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