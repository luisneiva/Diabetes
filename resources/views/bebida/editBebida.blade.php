@extends('layouts.app')

@section('content')

<div class="container">

  <h1 class="text-center">Editar Bebida</h1>

  <div id="formAtivo">
    {!! Form::open(['route' => ['bebida.update', $bebida->id], 'method' => 'PUT']) !!}
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">editar Bebida</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">

                           <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('id', 'Id :') !!}
                                    {!! Form::text('id',$bebida->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('nome', 'Nome do bebida:') !!}
                                    {!! Form::text('nome',$bebida->nome, ['class'=> 'form-control']) !!}
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('alcool', '% alcool') !!}
                                    {!! Form::text('alcool', $bebida->alcool, ['class'=> 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('qtd', 'Quantidade (cl):') !!}
                                    {!! Form::text('qtd', $bebida->qtd, ['class'=> 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                <a class="btn btn-primary btn-block" href="{{ url('bebida') }}">Voltar</a>
                                <input type="submit" class="btn btn-primary btn-block" value="Continuar"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection