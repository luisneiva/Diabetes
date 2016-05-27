
@extends('welcome')

@section('content')

<script>


</script>


<div class="container">
  <h1 class="text-center">Show Refeições</h1>



  {!! Form::open(['route'=> ['refeicao.store']]) !!}
  <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
      <div class="panel-heading">Refeição</div>
      <div class="panel-body">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('username', 'User:') !!}
            {!! Form::input('username', $user->username, null , ['class'=> 'form-control','readonly' =>'readonly', 'placeholder' => $user->username]) !!}
          </div>
        </div>
      </div>

      <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('refeicao', 'Refeição:') !!}
                            {!! Form::text('refeicao', $refeicoes->refeicao, null , ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

       <div class="row">
        <div class="col-md-6">
          <div class="form-group">
           {!! Form::label('alimento_id', 'Alimento:') !!}
           {!! Form::input('alimento_id', $alimento->nome, null , ['class'=> 'form-control','readonly' =>'readonly', 'placeholder' => $alimento->nome]) !!}
         </div>
       </div>
     </div>

     <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('qtd_alimento', 'Quantidade de alimento (cl):') !!}
          {!! Form::text('qtd_alimento', $refeicoes->qtd_alimento, ['class'=> 'form-control','readonly' =>'readonly']) !!}
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('bebida_id', 'Bebida:') !!}
          {!! Form::input('bebida_id', $bebida->nome , null, ['class'=> 'form-control','readonly' =>'true', 'placeholder' => $bebida->nome]) !!}
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('qtd_bebida', 'Quantidade de bebida :') !!}
          {!! Form::text('qtd_bebida',$refeicoes->qtd_bebida , ['class'=> 'form-control','readonly' =>'readonly']) !!}
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('total_carboidratos', 'Quantidade de Carboidratos:') !!}
          {!! Form::text('total_carboidratos',$refeicoes->total_carboidratos, ['class'=> 'form-control','readonly' =>'readonly']) !!}
        </div>
      </div>
    </div>

    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_calorias', 'Quantidade de Calorias:') !!}
                            {!! Form::text('total_calorias', $refeicoes->total_calorias, ['class'=> 'form-control','readonly' =>'readonly', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_proteinas', 'Quantidade de Proteinas:') !!}
                            {!! Form::text('total_proteinas', $refeicoes->total_proteinas, ['class'=> 'form-control','readonly' =>'readonly', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>

    <div class="row">
      <div class="col-md-12">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
        <a class="btn btn-primary btn-block" href="{{ url('refeicao') }}">Voltar</a>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
</div>
</div>
</div>

@endsection