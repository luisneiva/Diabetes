@extends('layouts.app')

@section('content')

<div class="text-center" style="margin:0 auto; width: 323;">
    <div class="panel-heading"><h2>{{ Auth::user()->shortName }}</h2></div>
        <br><br><br>
        <h2>Alguns conselhos!!!</h2>
</div>

@endsection