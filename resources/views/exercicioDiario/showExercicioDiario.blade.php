@extends('welcome')

@section('content')


<div class="container">
    <h1 class="text-center">Exercicio Diario</h1>



  {!! Form::open(['route'=> ['exerDiario.store']]) !!}
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Exercicio Diario</div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                @foreach ($exercicios as $exercicio)
                                     @if($exercicio->id == $exercicioDiario->exercicio_id )
                                           {!! Form::label('exercicio_id', 'Exercicio:') !!}
                                           {!! Form::text('exercicio_id', $exercicio->tipo,null, ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}

                                     @endif
                                @endforeach
                                 </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('tempo_gasto', 'Tempo de exercicio (min) :') !!}
                                    {!! Form::text('tempo_gasto', $exercicioDiario->tempo_gasto, ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('data', 'Data (min) :') !!}
                                    {!! Form::date('data', $exercicioDiario->data, ['class'=> 'form-control', 'disabled'=>'true']) !!}
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('calorias_gastas', 'Calorias gastas:') !!}
                                    {!! Form::text('calorias_gastas', $exercicioDiario->calorias_gastas, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                                </div>
                            </div>
                        </div>

                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                <a class="btn btn-primary btn-block" href="{{ url('exerDiario') }}">Voltar</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
  {!! Form::close() !!}
</div>

@endsection