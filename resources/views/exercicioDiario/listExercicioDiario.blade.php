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







                  </td>

            </tr>

          @endforeach
  <td>
    <div class="row">
        <div class="col-md-12">
          <a class="btn btn-primary btn-block" href="{{ url('/home') }}">Voltar</a>
        </div>
    </div>
  </td>
        </tbody>
      </table>
</div>
@endsection