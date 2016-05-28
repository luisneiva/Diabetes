@extends('layouts.app')

<!-- All the files that are required -->
<link rel="stylesheet" href="{{ asset('loginStyle.css') }}">

<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js") }}"></script>
<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js") }}"></script>
<script src="{{ asset('loginJS.js') }}"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

@section('content')
<!-- DATA UTENTE -->
<div class="text-center" style="margin:0 auto; width: 323;">
    <div class="logo">Register</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="register-form" method="POST" action="{{ url('/utente') }}" class="text-left">
            {!! csrf_field() !!}

            <div class="main-login-form">
                <div class="login-group">

                    <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                        <label for="fullname" class="sr-only">Full Name</label>

                        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname') }}" placeholder="Full Name">

                        @if($errors->has('fullname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fullname') }}</strong>
                            </span>

                        @endif
                    </div>

                    <div class="form-group login-group-checkbox {{ $errors->has('gender') ? ' has-error' : '' }}">

                        <label for="type">Gender:</label>

                        <input type="radio" class="form-control" name="gender" id="male" value="male" @if (old('gender') === 'm') checked @endif >
                        <label for="male">Male</label>

                        <input type="radio" class="form-control" name="gender" id="female" value="female" @if (old('gender') === 'f') checked @endif >
                        <label for="female">Female</label>

                        @if($errors->has('gender'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group login-group-checkbox {{ $errors->has('type') ? ' has-error' : '' }}">

                        <label for="type">Diabetes:</label>

                        <input type="radio" class="form-control" name="type" id="type1" value="type1" @if (old('type') === 'type1') checked @endif >
                        <label for="type1">type1</label>

                        <input type="radio" class="form-control" name="type" id="type2" value="type2" @if (old('type') === 'type2') checked @endif >
                        <label for="type2">type2</label>

                        @if($errors->has('type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group login-group-checkbox {{ $errors->has('treatmenttype') ? ' has-error' : '' }}">

                        <label for="treatmenttype">Treatment:</label>

                        <input type="radio" class="" name="treatmenttype" id="injection" value="injection" @if (old('treatmenttype') === 'injection') checked @endif >
                        <label for="injection">injection</label>

                        <input type="radio" class="" name="treatmenttype" id="oral" value="oral" @if (old('treatementtype') === 'oral') checked @endif >
                        <label for="oral">oral</label>

                        @if($errors->has('treatmenttype'))
                            <span class="help-block">
                                <strong>{{ $errors->first('treatmenttype') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                        <label for="weight" class="sr-only">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" value="{{ old('weight') }}" placeholder="Weight (kg)">

                        @if($errors->has('weight'))
                            <span class="help-block">
                                <strong>{{ $errors->first('weight') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>Have an account? <a href="{{ url('index') }}">Login here</a></p>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>
@endsection


