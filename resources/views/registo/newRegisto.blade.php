@extends('welcome')

@section('content')
<div class="container">
<h1 class="text-center">Registo Diario</h1>



  {!! Form::open(['route'=> ['registo.store']]) !!}
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Registo Diario</div>
            <div class="panel-body">

               {!! Form::hidden('user_id', Auth::user()->id) !!}

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          {!! Form::label('glicose', 'Valor da glicose:') !!}
                          {!! Form::text('glicose',0, ['class'=> 'form-control']) !!}
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12">
                      <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                      <a class="btn btn-primary btn-block" href="{{ url('registo') }}">Voltar</a>
                      <input type="submit" class="btn btn-primary btn-block" value="Registar glicose"/>
                  </div>
              </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>

@endsection
