@extends('welcome')

@section('content')

<div class="container">

  <h1 class="text-center">Editar exercicio</h1>

  <div id="formAtivo">
    {!! Form::open(['route' => ['exercicio.update', $exercicio->id], 'method' => 'PUT']) !!}
     <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('id', 'Id :') !!}
                        {!! Form::text('id',$exercicio->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
           <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo de exercicio:') !!}
                    {!! Form::text('tipo', $exercicio->tipo, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('intensidade', 'Nivel de intensidade:') !!}
                        {!! Form::text('intensidade', $exercicio->intensidade, ['class'=> 'form-control']) !!}
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('calorias_gastas', 'Calorias gastas:') !!}
                    {!! Form::text('calorias_gastas', $exercicio->calorias_gastas, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('exercicio') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Continuar"/>
            </div>
        </div>
  </div>
@endsection