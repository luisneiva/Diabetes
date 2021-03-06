@extends('welcome')

@section('content')




<div class="container">
    <h1 class="text-center">Registo de exercicio</h1>



  {!! Form::open(['route'=> ['exercicio.store']]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tipo', 'Exercicio:') !!}
                    {!! Form::text('tipo', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('tempo', 'Tempo de exercicio:') !!}
                    {!! Form::text('tempo', 0, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('calorias_gastas', 'Quantidade de Calorias gastas:') !!}
                    {!! Form::text('calorias_gastas', 0, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                <a class="btn btn-primary btn-block" href="{{ url('exercicio') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar exercicio"/>
            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection