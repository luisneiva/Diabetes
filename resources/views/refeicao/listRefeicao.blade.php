@extends('welcome')

@section('content')

<div class="container">
  <table class="table table-condensed, bordered">
        <thead>
          <tr>
              <th data-field="id">Nome Utente</th>
              <th data-field="name">DAta </th>
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

                  <td class="col-md-3, text-center">{{ $actUser }}</td>

                  <td class="col-md-3, text-center">{{ $refeicao->data }}</td>

                  <td class="col-md-2, text-center">{{ $refeicao->refeicao }}</td>

                  <td class="col-md-2, text-center">{{ $refeicao->qtd_alimento }}</td>

                  @foreach ($alimentos as $alimento)
                    @if($alimento->id == $refeicao->alimento_id )
                      <td class="col-md-3, text-center">{{ $alimento->nome }}</td>
                    @endif
                  @endforeach

                  <td class="col-md-2, text-center">{{ $refeicao->qtd_bebida }}</td>

                  @foreach ($bebidas as $bebida)
                    @if($bebida->id == $refeicao->bebida_id )
                      <td class="col-md-3, text-center">{{ $bebida->nome }}</td>
                    @endif
                  @endforeach

                  <td class="col-md-2, text-center">{{ $refeicao->total_carboidratos }}</td>

                  <td>



                      {!! Form::open(['route' => array('refeicao.destroy', $refeicao->id), 'method' => 'delete']) !!}
                        <!-- Show -->
                        <a href="{{ route('refeicao.show', [$refeicao->id]) }}" class="btn btn-primary">Ver</a>

                        <!-- Edit -->
                        <a href="{{ route('refeicao.edit', [$refeicao->id]) }}" class="btn btn-warning">Editar</a>
                        <!-- Add Risco -->
                        <a href="{{ route('refeicao.create', [$refeicao->id]) }}" class="btn btn-success">Add refeicao</a>

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