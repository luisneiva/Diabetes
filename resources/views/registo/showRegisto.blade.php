  @extends('welcome')

  @section('content')
  <div class="container">
  <h1 class="text-center">Registo Diario</h1>



    {!! Form::open(['route'=> ['registo.index']]) !!}
      <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading">Registo Diario</div>
              <div class="panel-body">


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('glicose', 'Valor da glicose:') !!}
                            {!! Form::text('glicose',$registo->glicose, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('created_at', 'Data / hora:') !!}
                            {!! Form::text('created_at',$registo->created_at, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_carboidratos_ingeridos', 'Carboidratos ingeridos:') !!}
                            {!! Form::text('total_carboidratos_ingeridos', $registo->total_carboidratos_ingeridos, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_proteinas_ingeridas', 'Proteinas ingeridas:') !!}
                            {!! Form::text('total_proteinas_ingeridas', $registo->total_proteinas_ingeridas, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_calorias_ingeridas', 'Calorias ingeridas:') !!}
                            {!! Form::text('total_calorias_ingeridas', $registo->total_calorias_ingeridas , ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('carboidratos_gastos', 'Carboidratos gastos:') !!}
                            {!! Form::text('carboidratos_gastos', $registo->carboidratos_gastos, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('proteinas_gastas', 'Proteinas gastas:') !!}
                            {!! Form::text('proteinas_gastas', $registo->proteinas_gastas, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('calorias_gastas', 'Calorias gastas:') !!}
                            {!! Form::text('calorias_gastas', $registo->calorias_gastas, ['class'=> 'form-control','readonly' =>'readonly']) !!}
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