@extends('welcome')

@section('content')
<div class="container">
    <h1 class="text-center">Editar Notificação</h1>


  {!! Form::open(['route'=> ['notifica.update', $notifica->id], 'method' => 'PUT']) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('user_id', 'Utente:') !!}
                    {!! Form::text('user_id', $notifica->user_id, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('mensagem', 'Notificação:') !!}
                    {!! Form::textarea('mensagem', $notifica->mensagem, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>

                    // TODO alterar caminho do botaõ voltar
                <a class="btn btn-primary btn-block" href="{{ url('notifica.update') }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar Notificação"/>

            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection