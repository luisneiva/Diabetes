@extends('welcome')

@section('content')

<div class="container">
  <table class="bordered">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="id">Tipo</th>
              <th data-field="name">Intensidade</th>
              <th data-field="price">Qtd calorias_gastas</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($exercicios as $exercicio)
            <tr class="line">
              <td class="text-center">{{$exercicio->id}}</td>
              <td class="text-center">{{$exercicio->qtd}}</td>
              <td class="text-center">{{$exercicio->nome}}</td>
              <td class="text-center">{{$exercicio->calorias_gastas}}</td>
              <td>
                {!! Form::open(['route' => array('exercicio.destroy', $exercicio->id), 'method' => 'delete']) !!}
                <!-- Show -->
                <a href="{{ route('exercicio.show', [$exercicio->id]) }}" class="btn btn-primary">Ver</a>

                <!-- Edit -->
                <a href="{{ route('exercicio.edit', [$exercicio->id]) }}" class="btn btn-warning">Editar</a>
                <!-- Add Risco -->
                <a href="{{ route('exercicio.create', [$exercicio->id]) }}" class="btn btn-success">Add exercicio</a>

                <button type="submit" class="btn btn-danger">Remover</button>
              </td>
            {!! Form::close() !!}
            </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection