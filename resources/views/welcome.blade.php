@extends('layouts.app')

@section('content')
<div class="container" xmlns="http://www.w3.org/1999/html">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Diabetes --> Toma as decisões acertadas!!!</h3></div>

                <div class="panel-body">
                    A diabetes é uma doença crónica que tem que ser controlada. Siga os nossos conselhos para garatir
                    qualidade de vida e para que este infortúnio não lhe traga mais problemas.
                    <a href="{{ url('/register') }}">Registe-se</a> na nossa plataforma!!!</br></br></br>
                    <img src="{{ $url = asset('imgs/diabetes.jpg') }}" style="width: 100%;height: auto">
                    </br></br></br>
                    @include('layouts/footer')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection