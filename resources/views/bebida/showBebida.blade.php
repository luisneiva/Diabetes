@extends('layouts.app')

@section('content')

<div class="container">

  <h1 class="text-center">Show Bebida</h1>

  <div id="formAtivo">
    {!! Form::open(['route' => ['bebida.update', $bebida->id], 'method' => 'PUT']) !!}
     <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">editar Bebida</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('id', 'Id :') !!}
                        {!! Form::text('id',$bebida->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>





           <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nome', 'Nome da bebida:') !!}
                    {!! Form::text('nome', $bebida->nome, ['class'=> 'form-control', 'disabled' => true]) !!}
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('calorias', 'Calorias') !!}
                        {!! Form::text('calorias',$bebida->calorias, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('carboidratos', 'carboidratos') !!}
                        {!! Form::text('carboidratos',$bebida->carboidratos, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
        </div>

        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('proteinas', 'Proteinas:') !!}
                        {!! Form::text('proteinas',$bebida->proteinas, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
        </div>



         <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('bebida') }}">Voltar</a>
            </div>
        </div>
  </div>
   </div>
    </div>
     </div>
      </div>
       </div>
        </div>
         </div>

@endsection