@extends('welcome')

@section('content')

<div class="container">

  <h1 class="text-center">Editar alimento</h1>

  <div id="formAtivo">
    {!! Form::open(['route' => ['alimento.update', $alimento->id], 'method' => 'PUT']) !!}
     <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('id', 'Id :') !!}
                        {!! Form::text('id',$alimento->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
           <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('qtd', 'Qtd de alimento:') !!}
                    {!! Form::text('qtd', $alimento->qtd, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome do alimento:') !!}
                        {!! Form::text('nome',$alimento->nome, ['class'=> 'form-control']) !!}
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('carboidratos', 'Quantidade de carboidartos:') !!}
                    {!! Form::text('carboidratos', $alimento->carboidratos, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('alimento') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Continuar"/>
            </div>
        </div>
  </div>
@endsection