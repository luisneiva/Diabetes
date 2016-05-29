@extends('welcome')

@section('content')


<script>

  function getValue() {

    var refeicao = {!! App\Refeicao::get() !!}
    var exercicio = {!! App\ExercicioDiario::get() !!}

    var carboIdratosIng = 0;
    var caloriasIng = 0;
    var proteinasIng = 0;
    var carboidratosGas = 0;
    var caloriasGas = 0;
    var proteinasGas = 0;

    var today = new Date();

    var dd = today.getDate();
    var mm = today.getMonth()+1; //Janeiro é [0]!
    var yyyy = today.getFullYear();

    // acrescentar 0 aos meses <10 (ex: 5 = 05)
    if(mm<10){
      var today = yyyy+'-0'+mm+'-'+dd;
    }else{
      var today = yyyy+'-'+mm+'-'+dd;
    }

    for (var i = 0; i < refeicao.length; i++) {

        var curRefeicao = refeicao[i];

        if(today === refeicao[i].data){
            carboIdratosIng += refeicao[i].total_carboidratos;
            caloriasIng += refeicao[i].total_calorias;
            proteinasIng += refeicao[i].total_proteinas;
        }
      }

    for (var i = 0; i < exercicio.length; i++) {

        var curExercicio = exercicio[i];

        if(today === exercicio[i].data){
            caloriasGas += exercicio[i].calorias_gastas;
    }

    carboidratosGas = 4 * caloriasGas;
    console.log(caloriasGas);
    console.log(carboidratosGas);
    proteinasGas = 4 * caloriasGas;

    }

     document.getElementById("total_carboidratos_ingeridos").value = carboIdratosIng;
     document.getElementById("total_proteinas_ingeridas").value = proteinasIng;
     document.getElementById("total_calorias_ingeridas").value = caloriasIng;
     document.getElementById("carboidratos_gastos").value = carboidratosGas;
     document.getElementById("proteinas_gastas").value = proteinasGas;
     document.getElementById("calorias_gastas").value = caloriasGas;
   }
</script>

@if (Session::has('message'))
    <div class="alert alert-danger">
        {{Session::get('message')}}
    </div>
@endif

<div class="container">
<h1 class="text-center">Registo Diario</h1>



  {!! Form::open(['route'=> ['registo.store']]) !!}
    <div class="col-md-8 col-md-offset-2">
            <div class="panel-heading">Registo Diario</div>
            <div class="panel-body">

               {!! Form::hidden('user_id', Auth::user()->id) !!}

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('glicose', 'Valor da glicose:') !!}
                          {!! Form::text('glicose',0, ['class'=> 'form-control', 'onclick'=>'getValue()']) !!}
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('total_carboidratos_ingeridos', 'Carboidratos ingeridos:') !!}
                          {!! Form::text('total_carboidratos_ingeridos', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                      </div>
                  </div>
              </div>

               <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('total_proteinas_ingeridas', 'Proteinas ingeridas:') !!}
                          {!! Form::text('total_proteinas_ingeridas', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('total_calorias_ingeridas', 'Calorias ingeridas:') !!}
                          {!! Form::text('total_calorias_ingeridas', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('carboidratos_gastos', 'Carboidratos gastos:') !!}
                          {!! Form::text('carboidratos_gastos', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('proteinas_gastas', 'Proteinas gastas:') !!}
                          {!! Form::text('proteinas_gastas', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('calorias_gastas', 'Calorias gastas:') !!}
                          {!! Form::text('calorias_gastas', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                      <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                      <a class="btn btn-primary btn-block" href="{{ url('registo') }}">Voltar</a>
                      <input type="submit" class="btn btn-primary btn-block" value="Registar glicose"/>
                  </div>
              </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>

@endsection
