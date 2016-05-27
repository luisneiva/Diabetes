@extends('welcome')

@section('content')

<div class="container">
  <table class="table table-condensed, bordered">
        <thead>
          <tr>
              <th data-field="name">Data/Hora</th>
              <th data-field="id">Valor de glicose</th>
              <th data-field="id">CarboiInger</th>
              <th data-field="id">ProteiInger</th>
               <th data-field="id">CalorInger</th>
              <th data-field="id">CarboGast</th>
              <th data-field="id">ProteiGast</th>
              <th data-field="id">CalorGast</th>

          </tr>
        </thead>

        <tbody>
          @foreach ($registos as $registo)
            <tr class="line">
                @if($registo->user_id == Auth::user()->id)

                  <td class="col-md-2, text-center">{{ $registo->created_at }}</td>
                  <td class="col-md-3, text-center">{{ $registo->glicose }}</td>
                  <td class="col-md-2, text-center">{{ $registo->total_carboidratos_ingeridos }}</td>
                  <td class="col-md-2, text-center">{{ $registo->total_proteinas_ingeridos }}</td>
                  <td class="col-md-2, text-center">{{ $registo->total_calorias_ingeridas }}</td>
                  <td class="col-md-2, text-center">{{ $registo->total_calorias_ingeridas }}</td>
                  <td class="col-md-2, text-center">{{ $registo->carboidratos_gastos }}</td>
                  <td class="col-md-2, text-center">{{ $registo->proteinas_gastas }}</td>
                  <td class="col-md-2, text-center">{{ $registo->calorias_gasts }}</td>
                  <td>



                      {!! Form::open(['route' => array('registo.destroy', $registo->id), 'method' => 'delete']) !!}
                        <!-- Show -->
                        <a href="{{ route('registo.show', [$registo->id]) }}" class="btn btn-primary">Ver</a>

                        <!-- Edit -->
                        <a href="{{ route('registo.edit', [$registo->id]) }}" class="btn btn-warning">Editar</a>
                        <!-- Add Risco -->
                        <a href="{{ route('registo.create', [$registo->id]) }}" class="btn btn-success">Add registo</a>

                        <button type="submit" class="btn btn-danger">Remover</button>
                      {!! Form::close() !!}
                  </td>
                @endif

            </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection