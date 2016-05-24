    @extends('welcome')
    @section('content')

  <script src="/chart.js/dist/Chart.js"></script>


    <script type="text/javascript">

        window.onload = function(){
           // var ctx = document.getElementById("GraficoLine")
            //var ctx = document.getElementById("#myChart").getContext("2d");
            var ctx = $("#myChart");
        }

    </script>

    <div class="container">
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
              label: '# Glicose',
              fill: false,
              lineTension: 0.1,
              backgroundColor: "rgba(128,0,0,0.4)",
              borderColor: "rgba(128,0,0,1)",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "rgba(75,192,192,1)",
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
              label: '# Proteinas',
              fill: false,
              lineTension: 0.5,
              backgroundColor: "rgba(255,64,64,0.4)",
              borderColor: "rgba(255,64,64,1)",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "rgba(75,192,192,1)",
              pointBackgroundColor: "#00009C",
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(75,192,192,1)",
              pointHoverBorderColor: "rgba(220,220,220,1)",
              pointHoverBorderWidth: 2,
              pointRadius: 3,
              pointHitRadius: 10,
              data: [@foreach ($refeicaos as $refeicao) {{ $refeicao->total_proteinas}}, @endforeach]
          },
         {
              label: '# Calorias ingeridas',
              fill: false,
              lineTension: 0.5,
              backgroundColor: "rgba(255,127,36,0.4)",
              borderColor: "rgba(225,127,36,1)",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "rgba(75,192,192,1)",
              pointBackgroundColor: "#00009C",
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(75,192,192,1)",
              pointHoverBorderColor: "rgba(220,220,220,1)",
              pointHoverBorderWidth: 2,
              pointRadius: 3,
              pointHitRadius: 10,
              data: [@foreach ($refeicaos as $refeicao) {{ $refeicao->total_calorias}}, @endforeach]
          },
         {
              label: '# Carboidratos',
              fill: false,
              lineTension: 0.5,
              backgroundColor: "rgba(47,79,47,0.4)",
              borderColor: "rgba(47,49,47,1)",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "rgba(75,192,192,1)",
              pointBackgroundColor: "#00009C",
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(75,192,192,1)",
              pointHoverBorderColor: "rgba(220,220,220,1)",
              pointHoverBorderWidth: 2,
              pointRadius: 3,
              pointHitRadius: 10,
              data: [@foreach ($refeicaos as $refeicao) {{ $refeicao->total_carboidratos}}, @endforeach]
          },
         {
              label: '# Calorias gastas',
              fill: false,
              lineTension: 0.5,
              backgroundColor: "rgba(75,192,192,0.4)",
              borderColor: "rgba(75,192,192,1)",
              borderCapStyle: 'butt',
              borderDash: [],
              borderDashOffset: 0.0,
              borderJoinStyle: 'miter',
              pointBorderColor: "rgba(75,192,192,1)",
              pointBackgroundColor: "#00009C",
              pointBorderWidth: 1,
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(75,192,192,1)",
              pointHoverBorderColor: "rgba(220,220,220,1)",
              pointHoverBorderWidth: 2,
              pointRadius: 3,
              pointHitRadius: 10,
              data: [@foreach ($exercicios as $exercicio) {{ $exercicio->calorias_gastas}}, @endforeach]
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





    </script>

  @endsection