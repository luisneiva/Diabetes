@extends('welcome')

@section('content')
<div class="container">
<h1 class="text-center">Registo de Alimentos</h1>



    {!! Form::open(['route'=> ['alimento.store']]) !!}
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Alimento</div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('nome', 'Nome do alimento:') !!}
                            {!! Form::text('nome',null, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('qtd_carboidratos', 'Quantidade de Carboidratos:') !!}
                            {!! Form::text('qtd_carboidratos', null, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                        <a class="btn btn-primary btn-block" href="{{ url('alimento') }}">Voltar</a>
                        <input type="submit" class="btn btn-primary btn-block" value="Registar alimento"/>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>

@endsection