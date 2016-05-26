@extends('welcome')

@section('content')
<div class="container">
    <h1 class="text-center">Nova Sugestão</h1>



  {!! Form::open(['route'=> ['sugere.store']]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   {!! Form::hidden('user_id', $id) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   {!! Form::hidden('check', false) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('sugestao', 'Sugestão:') !!}
                    {!! Form::textarea('sugestao', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

                    // TODO alterar caminho do botão voltar
                <a class="btn btn-primary btn-block" href="{{ url('sugere') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar Sugestão"/>

            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection