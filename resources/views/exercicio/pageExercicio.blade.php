@extends('layouts.app')

@section('content')

<div class="text-center" style="margin:0 auto; width: 323;" xmlns="http://www.w3.org/1999/html">
    <div class="panel-heading"><h2>{{ Auth::user()->shortName }}</h2></div>
    <div class="container">
        <h2>Exercícios</h2>
        <a type="button" class="btn btn-primary" href="{{ url('/exercicio/create') }}">Inserir Exercício</a>
        <a type="button" class="btn btn-primary" href="{{ url('/exercicio') }}">Todos os Exercícios</a>
        <a type="button" class="btn btn-success" href="{{ url('/utente/' . Auth::user()->utente->id) }}">Menu Principal</a>
    </div>

    <br><br><br>

    <h2>Inserir gráfico apenas com o valor das calorias a cada refeição (ultimos 5 dias)  </h2>
    <h2>Inserir lista de refeições (se possivel com uma cor de fundo mediante as calorias ingeridas)</h2>
</div>

@endsection
