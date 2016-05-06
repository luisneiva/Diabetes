@extends('welcome')

@section('content')
<div class="container">
    <h1 class="text-center">Registo de Bebidas</h1>



  {!! Form::open(['route'=> ['bebida.store']]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('qtd', 'Quantidade de Bebida:') !!}
                    {!! Form::text('qtd', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('nome', 'Nome do bebida:') !!}
                    {!! Form::text('nome',null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('carboidratos', 'Quantidade de Carboidratos:') !!}
                    {!! Form::text('carboidratos', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('bebida') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar bebida"/>
            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection