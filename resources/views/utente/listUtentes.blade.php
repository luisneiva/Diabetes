@extends('welcome')

@section('content')

<div class="container">
  <table class="table table-condensed, bordered">
        <thead>
          <tr>
              <th data-field="name">User_id</th>
              <th data-field="id">Nome</th>
              <th data-field="id">Sexo</th>
              <th data-field="id">Medico_id</th>
               <th data-field="id">Tipo diabetes</th>
              <th data-field="id">Tipo tratamento</th>
              <th data-field="id">Peso</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($utentes as $utente)
            <tr class="line">

                  <td class="col-md-2, text-center">{{ $utente->user_id }}</td>
                  <td class="col-md-3, text-center">{{ $utente->fullname }}</td>
                  <td class="col-md-2, text-center">{{ $utente->gender }}</td>
                  <td class="col-md-2, text-center">{{ $utente->medico_id }}</td>
                  <td class="col-md-2, text-center">{{ $utente->type }}</td>
                  <td class="col-md-2, text-center">{{ $utente->treatmenttype }}</td>
                  <td class="col-md-2, text-center">{{ $utente->weight}}</td>
                  <td>



                        <a href="{{ route('grafico.show', [$utente->user_id]) }}" class="btn btn-success">Grafico</a>

                  </td>

            </tr>

          @endforeach
        </tbody>
      </table>
</div>
@endsection