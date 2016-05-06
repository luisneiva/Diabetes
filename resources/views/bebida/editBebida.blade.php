@extends('welcome')

@section('content')

<div class="container">

  <h1 class="text-center">Editar Bebida</h1>

  <div id="formAtivo">
    {!! Form::open(['route' => ['bebida.update', $bebida->id], 'method' => 'PUT']) !!}
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
                    {!! Form::label('qtd', 'Qtd de bebida:') !!}
                    {!! Form::text('qtd', $bebida->qtd, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome do bebida:') !!}
                        {!! Form::text('nome',$bebida->nome, ['class'=> 'form-control']) !!}
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('carboidratos', 'Quantidade de carboidartos:') !!}
                    {!! Form::text('carboidratos', $bebida->carboidratos, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('bebida') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Continuar"/>
            </div>
        </div>
  </div>
@endsection