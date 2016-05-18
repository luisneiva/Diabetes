@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Diabetes</div>

                <div class="panel-body">
                    A diabetes é uma doença crónica que tem que ser controlada. Siga os nossos conselhos para garatir
                    qualidade de vida e para que este infortúnio não lhe traga mais problemas.
                    <a href="{{ url('/register') }}">Registe-se</a> na nossa plataforma!!!
                    <img src="{{ $url = asset('imgs/diabetes.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


style="width:304px;height:228px;">