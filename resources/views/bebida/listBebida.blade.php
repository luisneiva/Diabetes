@extends('welcome')

@section('content')

<div class="container">
  <table class="bordered">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="id">Nome</th>
              <th data-field="price"> ( CL )</th>
              <th data-field="name"> % alcool </th>

          </tr>
        </thead>

        <tbody>
          @foreach ($bebidas as $bebida)
            <tr class="line">
              <td class="text-center">{{$bebida->id}}</td>
              <td class="text-center">{{$bebida->nome}}</td>
              <td class="text-center">{{$bebida->qtd}}</td>
              <td class="text-center">{{$bebida->alcool}}</td>
              <td>
                {!! Form::open(['route' => array('bebida.destroy', $bebida->id), 'method' => 'delete']) !!}
                <!-- Show -->
                <a href="{{ route('bebida.show', [$bebida->id]) }}" class="btn btn-primary">Ver</a>

                <!-- Edit -->
                <a href="{{ route('bebida.edit', [$bebida->id]) }}" class="btn btn-warning">Editar</a>
                <!-- Add Risco -->
                <a href="{{ route('bebida.create', [$bebida->id]) }}" class="btn btn-success">Add bebida</a>

                <button type="submit" class="btn btn-danger">Remover</button>
              </td>
            {!! Form::close() !!}
            </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection