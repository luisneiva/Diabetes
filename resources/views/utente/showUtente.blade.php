@extends('layouts.app')

@section('content')

<script src="/chart.js/dist/Chart.js"></script>

<script type="text/javascript">
    var utentes = {!! App\Utente::get() !!}
    var curUser = ""
    var sexo = ""
    var tipo = ""
    var tratamento = ""
    var peso = 0
    var user ={{ $user }}

     function normalizeValue (value) {
    if (isNaN(value) || value === '' || value < 1) { return 0 }

    return parseInt(value)
  }

            function myFunction() {


            for (var i = 0; i < utentes.length; i++) {
                if(utentes[i].user_id === user)  {
console.log(utentes[i]);
                          curUser = utentes[i].fullname;
                          sexo = utentes[i].gender;
                          if(sexo === "f"){
                            sexo = "Feminino"
                        }else{
                            sexo = "Masculino"
                        }
                          tipo = utentes[i].type;
                           if(tipo === "type1"){
                            tipo = "Diabetes Tipo I"
                        }else{
                            tipo = "Diabetes tipo II"
                        }
                          tratamento = utentes[i].treatmenttype;

                           if(tratamento === "oral"){
                            tratamento = "Oral"
                        }else{
                            tratamento = "Insulina injectada"
                        }
                          peso = utentes[i].weight + " Kg";


                }
            }
        document.getElementById("nome").innerHTML = curUser;
        document.getElementById("sexo").innerHTML = sexo;
        document.getElementById("tipo").innerHTML = tipo;
        document.getElementById("trata").innerHTML = tratamento;
        document.getElementById("peso").innerHTML = peso;
        console.log(curUser);
        }

         window.onload = function(){
        var ctx = $("#myChart");
        myFunction();
    }
</script>
<div class="container">
<div class="text-center">

    <h1 class="text-center">Utente</h1>

    <div class="btn-group">
        <a type="button" class="btn btn-default" href="{{ url('/dicas') }}">Dicas </a>
        <a type="button" class="btn btn-primary" href="{{ '/pageRefeicao' }}">Refeições</a>
        <a type="button" class="btn btn-info" href="{{ '/exerDiario/create' }}">Exercício</a>
        <button type="button" class="btn btn-success">Chat</button>
    </div>

    <div class="text-center" style="margin-top: 20px">
        <p>Utente: <span id="nome"></span></p>
        <p>Sexo: <span id="sexo"></span></p>
        <p>Tipo: <span id="tipo" ></span></p>
        <p>Tratamento: <span id="trata"></span></p>
        <p>Peso: <span id="peso" >0</span></p>
    </div>


    <hr>
    <div class="box-chart">
      <canvas id="myChart" style="width:10%;"></canvas>
    </div>
<script type="text/javascript">

        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [@foreach ($registos as $registo) "{{ $registo->created_at}}", @endforeach],
                datasets: [{
                    label: '# Glicose ',
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(255,69,0,1)",
                    borderColor: "rgba(255,69,0,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(255,69,0,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 3,
                    pointHitRadius: 10,
                    data: [@foreach ($registos as $registo) {{ $registo->glicose}}, @endforeach]
                },
               {
                     label: '# Carboidratos Ingeridos',
                fill: false,
                lineTension: 0.5,
                backgroundColor: "rgba(0,255,127,1)",
                borderColor: "rgba(0,255,127,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(0,255,127,1)",
                pointBackgroundColor: "#00009C",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 3,
                pointHitRadius: 10,
                data: [@foreach ($registos as $registo) {{ $registo->total_carboidratos_ingeridos}}, @endforeach]
                },
               {
                    label: '# Carboidratos gastos',
                fill: false,
                lineTension: 0.5,
                backgroundColor: "rgba(0,139,69,1)",
                borderColor: "rgba(0,139,69,1)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(0,139,69,1)",
                pointBackgroundColor: "#00009C",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(75,192,192,1)",
                pointHoverBorderColor: "rgba(220,220,220,1)",
                pointHoverBorderWidth: 2,
                pointRadius: 3,
                pointHitRadius: 10,
                data: [@foreach ($registos as $registo) {{ $registo->carboidratos_gastos}}, @endforeach]
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>


    <h3>Gráfico com refeições e exercicio dos ultimos 5 dias</h3>
    <hr>
    <h4 class="col-md-3, text-center"> <b>Análise diária</b></h4>
    <h5> {{ $alimError }} em 5 dias excedeu o limite de consumo de carboidratos </h5>
    <h5> {{ $exercError }} em 5  dias excedeu o limite de gasto de carboidratos ao praticar exercicio </h5>
    <h5> {{ $glicError }} em 5 dias excedeu o limite do nivel de glicose </h5>
    <hr>
    @if($glicError > 2)
        <h5>
             @if($utente->treatmenttype==='injection')
                <span style="background-color: #e74c3c; color: white;"> Deve de ajustar as unidades de insulina, consulte o seu médico</span>
             @else
                <span style="background-color: #e74c3c; color: white;"> Deve de ajustar a toma de comprimidos, consulte o seu médico</span>
            @endif
        </h5>
    @endif
    <!-- faz exefcicio e come bastante -->
    @if(($exercError >= 2) && ($alimError >=2))
        <h5>
            <span style="background-color: #16a085; color: white;"> Deve de ajustar a pratica de exercicio fisico e reduzir ao consumo de carboidratos</span>
        </h5>

      <!-- faz exefcicio e come bastante -->
     @elseif(($exercSucess > 0) && ($alimError >=2))
        <h5>
            <span style="background-color: #16a085; color: white;"> Deve  reduzir ao consumo de carboidratos</span>
        </h5>
     @
       <!-- faz exefcicio e não come em demasia -->
      @elseif(($exercError >= 2) && ($alimError <2))
        <h5>
            <span style="background-color: #16a085; color: white;"> Deve de ajustar a pratica de exercicio fisico </span>
        </h5>
       <!-- faz pouco exefcicio e come em demasia -->
      @elseif(($exercError < 2 || $exercSucess < 2) && ($alimError >=2))
        <h5>
            <span style="background-color: #16a085; color: white;"> Deve de ajustar a sua alimentção e praticar mais exercicio fisico </span>
        </h5>
     @endif

    </div>
    <hr>
    @include ('layouts/footer')
</div>

@endsection
