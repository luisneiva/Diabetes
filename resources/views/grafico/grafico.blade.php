@extends('welcome')
@section('content')

<script src="/chart.js/dist/Chart.js"></script>

<script type="text/javascript">
    var utentes = {!! App\Utente::get() !!}
    var curUser = ""
    var sexo = ""
    var tipo = ""
    var tratamento = ""
    var peso = 0
    var user ={{ $id }}



     function normalizeValue (value) {
    if (isNaN(value) || value == '' || value < 1) { return 0 }

    return parseInt(value)
  }

            function myFunction() {


            for (var i = 0; i < utentes.length; i++) {
                if(utentes[i].user_id == user)  {

                          curUser = utentes[i].fullname;
                          sexo = utentes[i].gender;
                          if(sexo == "f"){
                            sexo = "Feminino"
                        }else{
                            sexo = "Masculino"
                        }
                          tipo = utentes[i].type;
                           if(tipo == "type1"){
                            tipo = "Diabetes Tipo I"
                        }else{
                            tipo = "Diabetes tipo II"
                        }
                          tratamento = utentes[i].treatmenttype;

                           if(tratamento == "oral"){
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
    <div class="btn-group btn-group-lg" role="group" aria-label="...">
        <p>Utente: <span id="nome"></span></p>
        <p>Sexo: <span id="sexo"></span></p>
        <p>Tipo: <span id="tipo" ></span></p>
        <p>Tratamento: <span id="trata"></span></p>
        <p>Peso: <span id="peso" >0</span></p>
    </div>

    <hr>
    <div class="box-chart">
      <canvas id="myChart" style="width:100%;"></canvas>
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
                    label: '# Proteinas Ingeridas',
                    fill: false,
                    lineTension: 0.5,
                    backgroundColor: "rgba(0,0,255,1)",
                    borderColor: "rgba(0,0,255,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(0,0,255,1)",
                    pointBackgroundColor: "#00009C",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 3,
                    pointHitRadius: 10,
                    data: [@foreach ($registos as $registo) {{ $registo->total_proteinas_ingeridas}}, @endforeach]
                },
               {
                    label: '# Calorias ingeridas',
                    fill: false,
                    lineTension: 0.5,
                    backgroundColor: "rgba(225,193,37,1)",
                    borderColor: "rgba(225,193,37,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(225,193,37,1)",
                    pointBackgroundColor: "#00009C",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 3,
                    pointHitRadius: 10,
                    data: [@foreach ($registos as $registo) {{ $registo->total_calorias_ngeridas}}, @endforeach]
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
                    label: '# Proteinas gastas',
                    fill: false,
                    lineTension: 0.5,
                    backgroundColor: "rgba(0,0,139,1)",
                    borderColor: "rgba(0,0,139,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(0,0,139,1)",
                    pointBackgroundColor: "#00009C",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 3,
                    pointHitRadius: 10,
                    data: [@foreach ($registos as $registo) {{ $registo->proteinas_gastas}}, @endforeach]
                },
               {
                    label: '# Calorias gastas',
                    fill: false,
                    lineTension: 0.5,
                    backgroundColor: "rgba(218,165,32,1)",
                    borderColor: "rgba(218,165,32,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(218,165,32,1)",
                    pointBackgroundColor: "#00009C",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 3,
                    pointHitRadius: 10,
                    data: [@foreach ($registos as $registo) {{ $registo->calorias_gastas}}, @endforeach]
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
    <hr>




    <!-- Adicionar Notificação-->
    <a href="{{ url('/notifica/create?utente=' . $id) }}" class="btn btn-success">Enviar Notificação</a>
     <!-- Adicionar Sugestão-->
    <a href="{{ route('sugere.show', [$id]) }}" class="btn btn-primary">Enviar Sugestão</a>

</div>





    @endsection
