@extends('layouts.app')

@section('content')

<div class="container">
  <div class="text-center">
    <div class="logo">Médico</div>
        <div class="container">
            <h2>Suporte</h2>
            <a type="button" class="btn btn-default" href="{{ url('/utente') }}">Utentes</a>
        </div>

    <br><br><br>

    <h2>Lista de Utentes com valores acima do aceitável</h2>

  </div>

  <table class="table">
    <thead>
      <th>Nome</th>
      <th>Glicose</th>
      <th>Carboidratos Ingeridos</th>
      <th>Carboidratos Gastos</th>
      <th>Ações</th>
    </thead>

    <tbody>
      @if (count($alertas) === 0)
      <tr>
        <td colspan="5" class="text-center"><b>Não existem alertas.</b></td>
      </tr>
      @endif

      @foreach($alertas as $alerta)
      <tr>
        <td>{{ App\User::find($alerta->user_id)->short_name }}</td>
        <td>{{ $alerta->glicose }}</td>
        <td>{{ $alerta->total_carboidratos_ingeridos }}</td>
        <td>{{ $alerta->carboidratos_gastos }}</td>
        <td>
          <div class="btn-group">
            <a href="{{ route('grafico.show', $alerta->user_id) }}" class="btn btn-success">Grafico</a>
            <a href="{{ url('/pageRefeicao?utente=' . $alerta->user_id) }}" class="btn btn-primary">Refeições</a>
            <a href="{{ url('/exerDiario?utente=' . $alerta->user_id) }}" class="btn btn-warning">Exercícios</a>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection