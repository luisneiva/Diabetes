@extends('welcome')

@section('content')

<div class="container">
  <table class="table table-condensed, bordered">
        <thead>
          <tr>
              <th data-field="id"> Exercicio</th>
              <th data-field="id"> Data</th>
              <th data-field="name">Tempo do exercicio </th>
              <th data-field="name">Calorias Gastas </th>
          </tr>
        </thead>

        <tbody>
          @foreach ($exercicioDiario as $exerDiario)
            <tr class="line">



                  @foreach ($exercicios as $exercicio)
                    @if($exercicio->id == $exerDiario->exercicio_id )
                      <td class="col-md-3, text-center">{{ $exercicio->tipo }}</td>
                    @endif
                  @endforeach

                  <td class="col-md-2, text-center">{{ $exerDiario->data }}</td>

                  <td class="col-md-2, text-center">{{ $exerDiario->tempo_gasto }}</td>

                   <td class="col-md-2, text-center">{{ $exerDiario->calorias_gastas }}</td>

                  <td>



                      {!! Form::open(['route' => array('exerDiario.destroy', $exerDiario->id), 'method' => 'delete']) !!}
                        <!-- Show -->
                        <a href="{{ route('exerDiario.show', [$exerDiario->id]) }}" class="btn btn-primary">Ver</a>

                        <!-- Edit -->
                        <a href="{{ route('exerDiario.edit', [$exerDiario->id]) }}" class="btn btn-warning">Editar</a>
                        <!-- Add Risco -->
                        <a href="{{ route('exerDiario.create', [$exerDiario->id]) }}" class="btn btn-success">Add refeicao</a>

                        <button type="submit" class="btn btn-danger">Remover</button>
                      {!! Form::close() !!}
                  </td>

            </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection