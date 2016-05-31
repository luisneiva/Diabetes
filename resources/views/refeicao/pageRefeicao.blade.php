@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel-heading"><h2>{{ $user->shortName }}</h2></div>

    <div class="container">
        <div class="text-center">

            <h2>Orientação</h2>
            @if(Auth::user()->type === 0)
            <a type="button" class="btn btn-primary" href="{{ url('/refeicao/create') }}">Inserir Refeição</a>
            <a type="button" class="btn btn-primary" href="{{ url('/refeicao') }}">Todas as Refeições</a>
            <a type="button" class="btn btn-primary" >Chat</a>
            <a type="button" class="btn btn-primary" href="{{ url('/notifica') }}">Notificações</a>
            <a type="button" class="btn btn-primary" href="{{ url('/registo') }}" >Registos</a>
            @else
            <a type="button" class="btn btn-primary" href="{{ url('/notifica?utente=' . App\Utente::find(Request::get('utente'))->user->id) }}">Notificações</a>
            <a type="button" class="btn btn-primary" href="{{ url('/registo?utente=' . App\Utente::find(Request::get('utente'))->user->id) }}" >Registos</a>
            @endif

            <a type="button" class="btn btn-success" href="/home">Menu Principal</a>

            <br><br><br>

            <!--<h2>Inserir gráfico apenas com o valor das calorias a cada refeição (ultimos 5 dias)  </h2> -->
        </div>

        {{-- lista de refeicoes --}}
        <table class="table">
            <thead>
                <th>Data</th>
                <th>Refeição</th>
                <th>Composição</th>
                <th>Carboidratos</th>
            </thead>

            <tbody>
                @foreach($refeicoes as $refeicao)
                    <tr>
                        <td>{{ $refeicao->created_at }}</td>
                        <td>{{ $refeicao->refeicao }}</td>
                        <td>
                            <h4>Alimentos</h4>
                            <ul>
                                @foreach($refeicao->alimentos as $alimento)
                                <li>{{ $alimento->alimento->nome }} x {{ $alimento->qtd }}</li>
                                @endforeach
                            </ul>

                            <h4>Bebidas</h4>
                            <ul>
                                @foreach($refeicao->bebidas as $bebida)
                                <li>{{ $bebida->bebida->nome }} x {{ $bebida->qtd }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td @if($refeicao->total_carboidratos > 160) style="background-color: #e74c3c; color: white;"@endif>{{ $refeicao->total_carboidratos }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
