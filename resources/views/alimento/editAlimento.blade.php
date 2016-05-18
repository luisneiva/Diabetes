@extends('welcome')

@section('content')

<div class="container">

  <h1 class="text-center">Editar alimento</h1>

  <div id="formAtivo">
    {!! Form::open(['route' => ['alimento.update', $alimento->id], 'method' => 'PUT']) !!}

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Alimento</div>
            <div class="panel-body">

               <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('id', 'Id :') !!}
                        {!! Form::text('id',$alimento->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('calorias', 'Calorias:') !!}
                            {!! Form::text('calorias',$alimento->calorias, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('proteinas', 'proteinas:') !!}
                            {!! Form::text('proteinas',$alimento->proteinas, ['class'=> 'form-control']) !!}
                        </div>
                    </div>
                </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('nome', 'Nome do alimento:') !!}
                        {!! Form::text('nome',$alimento->nome, ['class'=> 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('qtd_carboidratos', 'Quantidade de carboidartos:') !!}
                        {!! Form::text('qtd_carboidratos', $alimento->qtd_carboidratos, ['class'=> 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                    <a class="btn btn-primary btn-block" href="{{ url('alimento') }}">Voltar</a>
                    <input type="submit" class="btn btn-primary btn-block" value="Continuar"/>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection