@extends('layouts.app')

<!-- All the files that are required -->
<link rel="stylesheet" href="{{ asset('loginStyle.css') }}">

<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js") }}"></script>
<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js") }}"></script>
<script src="{{ asset('loginJS.js') }}"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

@section('content')
<!-- REGISTRATION FORM -->
<div class="text-center" style="margin:0 auto; width: 323;">
    <div class="logo">Register</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="register-form" method="POST" action="{{ url('/register') }}" class="text-left">
            {!! csrf_field() !!}

            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="username" class="sr-only">Username</label>

                            <input type="text" class="form-control" id="username" name="name" value="{{ old('name') }}" placeholder="Name">
                            @if($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="sr-only">E-mail Address</label>

                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail">

                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>

                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">

                        @if($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-eror' : '' }}">
                        <label for="password_confirm" class="sr-only">Password Confirm</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">

                        @if($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="fullname" class="sr-only">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" value="{{ old('fullname') }}" placeholder="Full Name">
                    </div>

                    <div class="form-group login-group-checkbox {{ $errors->has('gender') ? ' has-error' : '' }}">

                        <label for="type">Sex:</label>

                        <input type="radio" class="form-control" name="gender" id="male" value="male" @if (old('gender') === 'male') checked @endif >
                        <label for="male">Male</label>

                        <input type="radio" class="form-control" name="gender" id="female" value="female" @if (old('gender') === 'female')) checked @endif >
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

                    <div class="form-group login-group-checkbox {{ $errors->has('treatment') ? ' has-error' : '' }}">

                        <label for="treatment">Treatment:</label>

                        <input type="radio" class="" name="treatment" id="injection" value="injection" @if (old('treatment') === 'injection') checked @endif >
                        <label for="injection">injection</label>

                        <input type="radio" class="" name="treatment" id="oral" value="oral" @if (old('treatment') === 'oral') checked @endif >
                        <label for="oral">oral</label>

                        @if($errors->has('treatment'))
                            <span class="help-block">
                                <strong>{{ $errors->first('treatment') }}</strong>
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

                    <div class="form-group login-group-checkbox {{ $errors->has('reg_agree') ? ' has-error' : '' }}">
                        <input type="checkbox" class="" id="agree" name="reg_agree">
                        <label for="agree">I agree with <a href="#">terms</a></label>

                        @if($errors->has('reg_agree'))
                            <span class="help-block">
                                <strong>{{ $errors->first('reg_agree') }}</strong>
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


