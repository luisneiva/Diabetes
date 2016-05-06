@extends('welcome')

@section('content')

<div class="container">
  <table class="bordered">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="id">Quantidade</th>
              <th data-field="name">Nome</th>
              <th data-field="price">Qtd Carboidratos</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($alimentos as $alimento)
            <tr class="line">
              <td class="text-center">{{$alimento->id}}</td>
              <td class="text-center">{{$alimento->qtd}}</td>
              <td class="text-center">{{$alimento->nome}}</td>
              <td class="text-center">{{$alimento->carboidratos}}</td>
              <td>
                {!! Form::open(['route' => array('alimento.destroy', $alimento->id), 'method' => 'delete']) !!}
                <!-- Show -->
                <a href="{{ route('alimento.show', [$alimento->id]) }}" class="btn btn-primary">Ver</a>

                <!-- Edit -->
                <a href="{{ route('alimento.edit', [$alimento->id]) }}" class="btn btn-warning">Editar</a>
                <!-- Add Risco -->
                <a href="{{ route('alimento.create', [$alimento->id]) }}" class="btn btn-success">Add alimento</a>

                <button type="submit" class="btn btn-danger">Remover</button>
              </td>
            {!! Form::close() !!}
            </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection