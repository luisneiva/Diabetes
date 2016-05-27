@extends('layouts.app')

@section('content')

<div class="text-center" style="margin:0 auto; width: 323;" xmlns="http://www.w3.org/1999/html">
    <div class="panel-heading"><h2>{{ Auth::user()->shortName }}</h2></div>
    <div class="container">
        <h2>Orientação</h2>
        <a type="button" class="btn btn-default" href="{{ url('/dicas') }}">Dicas </a>
        <a type="button" class="btn btn-primary" href="{{ '/pageRefeicao' }}">Refeições</a>
        <button type="button" class="btn btn-info">Exercício</button>
        <button type="button" class="btn btn-success">Chat</button>
    </div>

    <br><br><br>

    <h2>Mensagem Caso haja valores fora do normal tanto nas refeições como exercicio</h2>
    <h2>Gráfico com os últimos dias relativamente a refeições e exercicio</h2>
</div>

@endsection
