@extends('layouts.app')

@section('content')
<!-- All the files that are required -->
<link rel="stylesheet" href="{{ asset('loginStyle.css') }}">


<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js") }}"></script>
<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js") }}"></script>
<script src="{{ asset('loginJS.js') }}"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Where all the magic happens -->
<!-- LOGIN FORM -->
<div class="text-center" style="margin:0 auto; width: 323px;">
    <div class="logo">Login</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="login-form" class="text-left" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="sr-only">Email</label>

                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">

                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="sr-only">Password</label>

                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ old('password') }}">

                        @if($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group login-group-checkbox">
                        <input type="checkbox" id="lg_remember" name="lg_remember">
                        <label for="lg_remember">Remember</label>
                    </div>
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>Forgot your password? <a href="{{ url('/password/reset') }}">Click here</a></p>
                <p>New user? <a href="{{ url('register') }}">Create new account</a></p>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>
@endsection

