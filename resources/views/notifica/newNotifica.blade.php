@extends('welcome')

@section('content')
<div class="container">
    <h1 class="text-center">Nova Notificação</h1>

  {!! Form::open(['route'=> ['notifica.store']]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                   {!! Form::hidden('user_id', Request::get('utente')) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('notificacao', 'Notificação:') !!}
                    {!! Form::textarea('notificacao', null, ['class'=> 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>


                <a class="btn btn-primary btn-block" href="{{ url('/notifica?utente=' . Request::get('utente')) }}">Voltar</a>
                <input type="submit" class="btn btn-primary btn-block" value="Registar Notificação"/>

            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection