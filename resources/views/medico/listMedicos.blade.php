@extends('welcome')

@section('content')

<div class="container">
  <table class="bordered">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="name">Nome</th>
              <th data-field="price">Nº Cédula</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($medicos as $medico)
            <tr class="line">
              <td class="text-center">{{$medico->id}}</td>
              <td class="text-center">{{$medico->nome}}</td>
              <td class="text-center">{{$medico->num_cedula}}</td>
              <td>
                {!! Form::open(['route' => array('medico.destroy', $medico->id), 'method' => 'delete']) !!}
                <!-- Show -->
                <a href="{{ route('medico.show', [$medico->id]) }}" class="btn btn-primary">Ver</a>

                <!-- Edit -->
                <a href="{{ route('medico.edit', [$medico->id]) }}" class="btn btn-warning">Editar</a>
                <!-- Add Risco -->
                <a href="{{ route('medico.create', [$medico->id]) }}" class="btn btn-success">Add Medico</a>

                <button type="submit" class="btn btn-danger">Remover</button>
              </td>
            {!! Form::close() !!}
            </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection