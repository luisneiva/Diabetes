@extends('welcome')

@section('content')

<div class="container">
  <table class="table table-condensed, bordered">
        <thead>
          <tr>
              <th data-field="id">Nome Utente</th>
              <th data-field="name">Data </th>
              <th data-field="name">Refeição </th>
              <th data-field="name">qtd_Alimento </th>
              <th data-field="id">Alimento</th>
               <th data-field="name">qtd_Bebida </th>
              <th data-field="name">Bebida </th>
               <th data-field="price">total_Carboidratos</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($refeicoes as $refeicao)
            <tr class="line">
                @if($refeicao->user_id == Auth::user()->id)

                  <td class="col-md-3, text-center">{{ $utente->fullname }}</td>

                  <td class="col-md-3, text-center">{{ $refeicao->data }}</td>

                  <td class="col-md-2, text-center">{{ $refeicao->refeicao }}</td>

                  <td class="col-md-2, text-center">{{ $refeicao->qtd_alimento }}</td>

                  <td class="col-md-3, text-center">

                      @foreach ($refeicao->alimentos as $alimento)
                        <li>{{ $alimento->alimento->nome }} X {{ $alimento->qtd }}</li>
                    @endforeach

                  </td>

                  <td class="col-md-2, text-center">{{ $refeicao->qtd_bebida }}</td>

                    <td class="col-md-3, text-center">
                      <ul>
                        @foreach ($refeicao->bebidas as $bebida)
                          <li>{{ $bebida->bebida->nome }} X {{ $bebida->qtd }}</li>
                        @endforeach
                      </ul>
                    </td>
                  </td>
                  <td @if($refeicao->total_carboidratos > 160) style="background-color: #e74c3c; color: white;"@endif>{{ $refeicao->total_carboidratos }}</td>
                @endif
            </tr>
          @endforeach
          <td> <a class="btn btn-primary btn-block" href="{{ url('/pageRefeicao') }}">Voltar</a></td>
        </tbody>

</div>
@endsection
