@extends('welcome')

@section('content')
<div class="container">
    <h1 class="text-center">Registo de Medicos</h1>



  {!! Form::open(['route'=> ['medico.store']]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nome', 'Nome do Medico:') !!}
                    {!! Form::text('nome',null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('cedula', 'Numero de cedula de Cedula:') !!}
                    {!! Form::text('cedula', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('medico') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar Medico"/>
            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection