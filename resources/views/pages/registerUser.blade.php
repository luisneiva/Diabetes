<!-- All the files that are required -->
<link rel="stylesheet" href="{{ asset("//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'><link rel="stylesheet" href="{{ asset('loginStyle.css') }}">


<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js") }}"></script>
<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js") }}"></script>
<script src="{{ asset('loginJS.js') }}"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- REGISTRATION FORM -->
<div class="text-center" style="margin:0 auto; width: 323;">
    <div class="logo">Register</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="register-form" method="POST" action="{{ url('/store') }}" class="text-left">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="username" class="sr-only">Email address</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirm" class="sr-only">Password Confirm</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="fullname" class="sr-only">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name">
                    </div>

                    <div class="form-group login-group-checkbox">
                        <input type="radio" class="" name="gender" id="male" placeholder="username">
                        <label for="male">Male</label>

                        <input type="radio" class="" name="gender" id="female" placeholder="username">
                        <label for="female">Female</label>
                    </div>

                    <div class="form-group login-group-checkbox">

                        <label for="type">Diabetes:</label>

                        <input type="radio" class="" name="type" id="type1" placeholder="username">
                        <label for="type1">type1</label>

                        <input type="radio" class="" name="type" id="type2" placeholder="username">
                        <label for="type2">type2</label>
                    </div>

                    <div class="form-group login-group-checkbox">

                        <label for="treatment">Treatment:</label>

                        <input type="radio" class="" name="treatment" id="injection" placeholder="username">
                        <label for="injection">injection</label>

                        <input type="radio" class="" name="treatment" id="oral" placeholder="username">
                        <label for="oral">oral</label>
                    </div>

                    <div class="form-group">
                        <label for="weight" class="sr-only">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight (kg)">
                    </div>

                    <div class="form-group login-group-checkbox">
                        <input type="checkbox" class="" id="agree" name="reg_agree">
                        <label for="agree">I agree with <a href="#">terms</a></label>
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


