@extends('layouts.app')

@section('content')
<div class="container">

    <div class="text-center">

        <h1 class="text-center">Utente</h1>

        <div class="panel-heading"><h2>{{ Auth::user()->shortName }}</h2></div>

        <h2>Orientação</h2>


        <a type="button" class="btn btn-default" href="{{ url('/dicas') }}">Dicas </a>
        <a type="button" class="btn btn-primary" href="{{ '/pageRefeicao' }}">Refeições</a>
        <button type="button" class="btn btn-info">Exercício</button>
        <button type="button" class="btn btn-success">Chat</button>


        <br><br><br>
        @foreach ($registos as $registo)
            @if( $registo->total_carboidratos_ingeridos > 150)
                <h2> Na data {{ $registo->created_at}}  consumiu Carboidratos a mais</h2>
            @endif
        @endforeach
        <h2>Gráfico com os últimos dias relativamente a refeições e exercicio</h2>

    </div>

    <div id="formAtivo">
        {!! Form::open(['route' => ['utente.update', $utente->id], 'method' => 'PUT']) !!}
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Utente</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                {!! Form::label('id', 'Id :') !!}
                                {!! Form::text('id',$utente->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('fullname', 'Nome do utente:') !!}
                                {!! Form::text('fullname',$utente->fullname, ['class'=> 'form-control', 'disabled' =>
                                true])
                                !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('gender', 'Sexo::') !!}
                                {!! Form::text('gender', $utente->gender, ['class'=> 'form-control', 'disabled' =>
                                true])
                                !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('type', 'Tipo de diabetes:') !!}
                                {!! Form::text('type', $utente->type, ['class'=> 'form-control', 'disabled' => true])
                                !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('treatmenttype', 'Tipo de tratamento:') !!}
                                {!! Form::text('treatmenttype', $utente->treatmenttype, ['class'=> 'form-control',
                                'disabled' => true]) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                            <a class="btn btn-primary btn-block" href="{{ url('utente') }}">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection