@extends('welcome')

@section('content')

<div class="container">

  <h1 class="text-center">Editar Medico</h1>

  <div id="formAtivo">
    {!! Form::open(['route' => ['medico.update', $medico->id], 'method' => 'PUT']) !!}
     <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('id', 'Id :') !!}
                        {!! Form::text('id',$medico->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome do Medico:') !!}
                        {!! Form::text('nome',$medico->nome, ['class'=> 'form-control']) !!}
                    </div>
                </div>
            </div>
         <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cedula', 'Numero de cedula de Cedula:') !!}
                    {!! Form::text('cedula', $medico->cedula, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('medico') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Continuar"/>
            </div>
        </div>
  </div>
@endsection