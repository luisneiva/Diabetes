@extends('welcome')
@section('content')

<script src="/chart.js/dist/Chart.js"></script>

<script type="text/javascript">
    var users = {!! App\User::get() !!}
    var curUser =""
    var user ={{ $user }}

            function myFunction() {
            console.log('passa');
            for (var i = 0; i < users.length; i++) {

                if(users[i].id === user)  {
                          curUser = users[i].email;
                   console.log(user);
                }
            }
        document.getElementById("nome").innerHTML = curUser;
        console.log(curUser);
        }

         window.onload = function(){
        var ctx = $("#myChart");
        myFunction();
    }
</script>

<div class="container">
    <p>Utente: <span id="nome"></span></p>
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
    <a href="{{ route('notifica.show', [$registo->user_id]) }}" class="btn btn-success">Enviar Notificação</a>
     <!-- Adicionar Sugestão-->
    <a href="{{ route('sugere.show', [$registo->user_id]) }}" class="btn btn-primary">Enviar Sugestão</a>

</div>





    @endsection