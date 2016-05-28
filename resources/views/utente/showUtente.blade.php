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


            <div class="panel-heading"><h2>{{ Auth::user()->shortName }}</h2></div>




            <a type="button" class="btn btn-default" href="{{ url('/dicas') }}">Dicas </a>
            <a type="button" class="btn btn-primary" href="{{ '/pageRefeicao' }}">Refeições</a>
            <button type="button" class="btn btn-info">Exercício</button>
            <button type="button" class="btn btn-success">Chat</button>

    <div class="btn-group btn-group-lg" role="group" aria-label="...">
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





            <br><br><br>
            @foreach ($registos as $registo)
                @if( $registo->total_carboidratos_ingeridos > 150)
                    <h2> Na data {{ $registo->created_at}}  consumiu Carboidratos a mais</h2>
                @endif
            @endforeach







            <h2>Gráfico com os últimos dias relativamente a refeições e exercicio</h2>

        </div>

=======
>>>>>>> 4800df733046a592af23f57d228d4d4ff9b03412
        <div id="formAtivo">
            {!! Form::open(['route' => ['utente.update', $utente->id], 'method' => 'PUT']) !!}
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Utente</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
<<<<<<< HEAD
                                <div class="form-group">
=======
                                <div class="form-group text-left">
>>>>>>> 4800df733046a592af23f57d228d4d4ff9b03412
                                    {!! Form::label('id', 'Id :') !!}
                                    {!! Form::text('id',$utente->id, ['class'=> 'form-control', 'disabled' => true]) !!}
                                </div>
                            </div>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <div class="form-group">
=======
                                <div class="form-group text-left">
>>>>>>> 4800df733046a592af23f57d228d4d4ff9b03412
                                    {!! Form::label('fullname', 'Nome do utente:') !!}
                                    {!! Form::text('fullname',$utente->fullname, ['class'=> 'form-control', 'disabled' =>
                                    true])
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-6">
<<<<<<< HEAD
                                <div class="form-group">
=======
                                <div class="form-group text-left">
>>>>>>> 4800df733046a592af23f57d228d4d4ff9b03412
                                    {!! Form::label('gender', 'Sexo::') !!}
                                    {!! Form::text('gender', $utente->gender, ['class'=> 'form-control', 'disabled' =>
                                    true])
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-6">
<<<<<<< HEAD
                                <div class="form-group">
=======
                                <div class="form-group text-left">
>>>>>>> 4800df733046a592af23f57d228d4d4ff9b03412
                                    {!! Form::label('type', 'Tipo de diabetes:') !!}
                                    {!! Form::text('type', $utente->type, ['class'=> 'form-control', 'disabled' => true])
                                    !!}
                                </div>
                            </div>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <div class="form-group">
=======
                                <div class="form-group text-left">
>>>>>>> 4800df733046a592af23f57d228d4d4ff9b03412
                                    {!! Form::label('treatmenttype', 'Tipo de tratamento:') !!}
                                    {!! Form::text('treatmenttype', $utente->treatmenttype, ['class'=> 'form-control',
                                    'disabled' => true]) !!}
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
                                <a class="btn btn-primary btn-block" href="{{ url('utente') }}">Voltar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
        @endsection
=======

    </div>


    @endsection
>>>>>>> 4800df733046a592af23f57d228d4d4ff9b03412
