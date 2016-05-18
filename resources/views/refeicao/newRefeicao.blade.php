
@extends('welcome')

@section('content')

<script>
  var alimentos = {!! App\Alimento::get() !!}
  var bebidas =  {!! App\Bebida::get() !!}
  var qtdBebida = 0
  var qtdAlimento = 0

  function normalizeValue (value) {
    if (isNaN(value) || value === '' || value < 1) { return 0 }

    return parseInt(value)
  }

  function getValue() {
    var selAlimento = document.getElementById("alimento_id");
    var qtdAlimento = normalizeValue(document.getElementById("qtd_alimento").value);
    var selBebida   = document.getElementById("bebida_id");
    var qtdBebida   = normalizeValue(document.getElementById("qtd_bebida").value);

    var carboIdratos = 0

    // obtem o valor calorico do alimento
    for (var i = 0; i < alimentos.length; i++) {
      var curAlimento = alimentos[i];

      if (curAlimento.id === parseInt(selAlimento.value)) {
        carboIdratos = curAlimento.qtd_carboidratos * qtdAlimento
        break;
      }
    }

    // obtem o valor calorico do alimento
    for (var i = 0; i < bebidas.length; i++) {
      var curBebida = bebidas[i];

      if (curBebida.id === parseInt(selBebida.value)) {
        carboIdratos += curBebida.qtd * qtdBebida
        break;
      }
    }

    if (carboIdratos)

      if (carboIdratos >= 5000){
        window.alert("está a consumir mais carboidaratos do que o desejavel");
      }
    document.getElementById("total_carboidratos").value = parseInt(carboIdratos);
  }

</script>


<div class="container">
<h1 class="text-center">Registo de Refeições</h1>



    {!! Form::open(['route'=> ['refeicao.store']]) !!}
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Refeição</div>
            <div class="panel-body">
                {!! Form::hidden('user_id', Auth::user()->id) !!}

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('alimento_id', 'Alimento:') !!}
                            {!! Form::select('alimento_id', $allAlimentos, null , ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('qtd_alimento', 'Quantidade de alimento (cl):') !!}
                            {!! Form::text('qtd_alimento', 0 , ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('bebida_id', 'Bebida:') !!}
                            {!! Form::select('bebida_id', $allBebidas , null, ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('qtd_bebida', 'Quantidade de bebida (cl):') !!}
                            {!! Form::text('qtd_bebida', 0 , ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_carboidratos', 'Quantidade de Carboidratos:') !!}
                            {!! Form::text('total_carboidratos', 0, ['class'=> 'form-control','readonly' =>'readonly', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                        <a class="btn btn-primary btn-block" href="{{ url('refeicao') }}">Voltar</a>
                        <input type="submit" class="btn btn-primary btn-block" value="Registar refeicao"/>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>

@endsection