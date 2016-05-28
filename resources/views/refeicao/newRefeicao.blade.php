
@extends('welcome')

@section('content')

<script>
  var alimentos = {!! App\Alimento::get() !!}
  var bebidas =  {!! App\Bebida::get() !!}
  var qtdBebida = 0
  var qtdAlimento = 0


  function normalizeValue (value) {
    if (isNaN(value) || value === '' || value < 1) { return 0 }

    return parseInt(value)
  }

  function getValue() {
    var selAlimento = 0;
    var qtdAlimento = 0;
    var selBebida   = 0;
    var qtdBebida   = 0;


    var carboIdratos = 0.0;
    var calorias = 0;
    var proteinas = 0;

    $('.refeicao_row').each(function (elem) {
        selAlimento = $(this).find('.alimento_id_field').val()
        qtdAlimento = $(this).find('.alimento_qtd_field').val()

        for (var i = 0; i < alimentos.length; i++) {
          var curAlimento = alimentos[i];

          if (curAlimento.id === parseInt(selAlimento)) {
            carboIdratos += curAlimento.qtd_carboidratos * qtdAlimento;
            calorias += curAlimento.calorias * qtdAlimento;
            proteinas += curAlimento.proteinas * qtdAlimento;

            break;
          }
        }
    })


    // obtem o valor calorico do alimento
    $('.bebida_row').each(function (elem) {
        selBebida = $(this).find('.bebida_id_field').val()
        qtdBebida = $(this).find('.bebida_qtd_field').val()

        console.log('>>>', selBebida, qtdBebida);

        // obtem o valor calorico do alimento
        for (var i = 0; i < bebidas.length; i++) {
          var curBebida = bebidas[i];

          if (curBebida.id === parseInt(selBebida)) {

            carboIdratos += curBebida.carboidratos * qtdBebida;
            calorias += curBebida.calorias * qtdBebida;
            proteinas += curBebida.proteinas * qtdBebida;

            break;
          }
        }
    })

    document.getElementById("total_carboidratos").value = carboIdratos;
    document.getElementById("total_calorias").value = calorias;
    document.getElementById("total_proteinas").value = proteinas;

    if (carboIdratos >= 150 || qtdBebida>=3){
      alert("O ideal seria consumir carboidratos em quantidade inferior a 150g, \n duas(2) ou menos bebidas alcoolicas por dia \n \n Pode optar por aumentar o exercicio fisico");
    }

  }

  function duplicateRefeicao() {
    $( '<div class="row refeicao_row">' + $('#refeicaoRow').html() + '</div>' ).insertBefore( $('#alimentoAddBtnRow') );
  }

  function duplicateBebida() {
    $( '<div class="row bebida_row">' + $('#bebidaRow').html() + '</div>' ).insertBefore( $('#bebidaAddBtnRow') );
  }

</script>

@if (Session::has('message'))
    <div class="alert alert-danger">
        {{Session::get('message')}}
    </div>
    @endif

<div class="container">
<h1 class="text-center">Registo de Refeições</h1>


    @if(Session::has('msg'))
        <div class="alert alert-warning">{{ Session::get('msg') }}</div>
    @endif



    {!! Form::open(['route'=> ['refeicao.store']]) !!}
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Refeição</div>
            <div class="panel-body">
                {!! Form::hidden('user_id', Auth::user()->id) !!}
                {!! Form::hidden('data', $data) !!}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('refeicao', 'Refeição:') !!}
                            {!! Form::select('refeicao', ['Peq Almoco' =>'Peq Almoco', 'Almoco' => 'Almoco', 'Lanche' => 'Lanche', 'Jantar' =>'Jantar'], null , ['class'=> 'form-control', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>

                 <div class="row refeicao_row" id="refeicaoRow">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('alimento_id[]', 'Alimento:') !!}
                            {!! Form::select('alimento_id[]', $allAlimentos, null , ['class'=> 'form-control alimento_id_field', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('qtd_alimento[]', 'Quantidade de alimento (100g):') !!}
                            {!! Form::text('qtd_alimento[]', 0 , ['class'=> 'form-control alimento_qtd_field','onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>

                <div class="row" id="alimentoAddBtnRow" >
                    <div class="col-sm-12">
                        <a onClick="duplicateRefeicao()" class="btn btn-success btn-block">Inserir +</a>
                    </div>
                </div>

                 <div class="row bebida_row" id="bebidaRow">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('bebida_id[]', 'Bebida:') !!}
                            {!! Form::select('bebida_id[]', $allBebidas , null, ['class'=> 'form-control bebida_id_field', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('qtd_bebida[]', 'Quantidade de bebida (20cl):') !!}
                            {!! Form::text('qtd_bebida[]', 0 , ['class'=> 'form-control bebida_qtd_field', 'onchange'=>'getValue()']) !!}
                        </div>
                    </div>
                </div>

                <div class="row" id="bebidaAddBtnRow" >
                    <div class="col-sm-12">
                        <a onClick="duplicateBebida()" class="btn btn-success btn-block">Inserir +</a>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_carboidratos', 'Quantidade de Carboidratos:') !!}
                            {!! Form::text('total_carboidratos', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_calorias', 'Quantidade de Calorias:') !!}
                            {!! Form::text('total_calorias', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('total_proteinas', 'Quantidade de Proteinas:') !!}
                            {!! Form::text('total_proteinas', 0, ['class'=> 'form-control','readonly' =>'readonly']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                        <a class="btn btn-primary btn-block" href="{{ url('/pageRefeicao') }}">Voltar</a>
                        <input type="submit" class="btn btn-primary btn-block" value="Registar refeicao"/>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>

@endsection