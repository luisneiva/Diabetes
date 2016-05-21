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


