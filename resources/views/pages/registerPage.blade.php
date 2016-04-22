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
        <form id="register-form" class="text-left">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="reg_username" class="sr-only">Email address</label>
                        <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="reg_password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
                        <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="Confirm Password">
                    </div>

                    <div class="form-group">
                        <label for="reg_email" class="sr-only">Email</label>
                        <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="reg_fullname" class="sr-only">Full Name</label>
                        <input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="Full Name">
                    </div>

                    <div class="form-group login-group-checkbox">
                        <input type="radio" class="" name="reg_gender" id="male" placeholder="username">
                        <label for="male">Male</label>

                        <input type="radio" class="" name="reg_gender" id="female" placeholder="username">
                        <label for="female">Female</label>
                    </div>

                    <div class="form-group login-group-checkbox">

                        <label for="type">Diabetes:</label>

                        <input type="radio" class="" name="reg_type" id="type1" placeholder="username">
                        <label for="type1">type1</label>

                        <input type="radio" class="" name="reg_type" id="type2" placeholder="username">
                        <label for="type2">type2</label>
                    </div>

                    <div class="form-group login-group-checkbox">

                        <label for="treatment">Treatment:</label>

                        <input type="radio" class="" name="reg_treatment" id="injection" placeholder="username">
                        <label for="injection">injection</label>

                        <input type="radio" class="" name="reg_treatment" id="oral" placeholder="username">
                        <label for="oral">oral</label>
                    </div>

                    <div class="form-group">
                        <label for="reg_weight" class="sr-only">Weight</label>
                        <input type="text" class="form-control" id="reg_weight" name="reg_weight" placeholder="Weight (kg)">
                    </div>

                    <div class="form-group login-group-checkbox">
                        <input type="checkbox" class="" id="reg_agree" name="reg_agree">
                        <label for="reg_agree">I agree with <a href="#">terms</a></label>
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