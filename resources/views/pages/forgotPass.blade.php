<!-- All the files that are required -->
<link rel="stylesheet" href="{{ asset("//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'><link rel="stylesheet" href="{{ asset('loginStyle.css') }}">


<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js") }}"></script>
<script src="{{ asset("//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js") }}"></script>
<script src="{{ asset('loginJS.js') }}"></script>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- FORGOT PASSWORD FORM -->
<div class="text-center" style="margin:0 auto; width: 323;">
    <div class="logo">Forgot Password</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="forgot-password-form" class="text-left">
            <div class="etc-login-form">
                <p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
            </div>
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="fp_email" class="sr-only">Email address</label>
                        <input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="Email address">
                    </div>
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>Have an account? <a href="{{ url('index') }}">Login here</a></p>
                <p>New user? <a href="{{ url('register') }}">Create new account</a></p>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>