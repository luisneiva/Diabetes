@extends('welcome')

@section('content')

<div class="container">
  @if (Auth::user()->type === 1)
  <a class="btn btn-primary" href="{{ url('/notifica/create?utente=' . Request::get('utente')) }}">Criar Notificação</a>
  @endif

  <table class="table bordered">
      <thead>
        <th data-field="price">Notificações</th>
      </thead>
      <tbody>
        @foreach ($notificas as $notifica)
          <tr class="line">
            <td class="text-center">{{ $notifica->notificacao }} <hr></td>
          </tr>
        @endforeach
      </tbody>
      </table>
      <hr>
      <a  class="btn btn-primary btn-block" href="{{ url('/pageRefeicao') }}">voltar</a>
</div>
@endsection