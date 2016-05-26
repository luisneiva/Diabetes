@extends('welcome')

@section('content')
<div class="container">
    <h1 class="text-center">Editar sugestão</h1>


  {!! Form::open(['route'=> ['sugere.update', $sugere->id], 'method' => 'PUT']) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('user_id', 'Utente:') !!}
                    {!! Form::text('user_id', $sugere->user_id, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('sugestao', 'Notificação:') !!}
                    {!! Form::textarea('sugestao', $sugere->sugestao, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

                    // TODO alterar caminho do botaõ voltar
                <a class="btn btn-primary btn-block" href="{{ url('sugere') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar Sugestão"/>

            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection