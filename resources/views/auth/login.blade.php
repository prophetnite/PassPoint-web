<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>PassPoint | Windows Credential Monitoring and Auditing</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ url('vendor/fontawesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ url('vendor/animate.css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ url('vendor/bootstrap/css/bootstrap.css') }}"/>

    <!-- App styles -->
    <link rel="stylesheet" href="{{ url('styles/pe-icons/pe-icon-7-stroke.css') }}"/>
    <link rel="stylesheet" href="{{ url('styles/pe-icons/helper.css') }}"/>
    <link rel="stylesheet" href="{{ url('styles/stroke-icons/style.css') }}"/>
    <link rel="stylesheet" href="{{ url('styles/style.css') }}">
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
        <div class="back-link">
            <a href="/dashboard" class="btn btn-accent">Back to Dashboard</a>
        </div>

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Login</h3>
                    <small>
                        Please enter your credentials to login.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form method="POST" action="{{ url('/auth/login') }}" id="loginForm" novalidate>
                    {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label" for="username">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @else
                                <span class="help-block small">Your unique email to app</span>
                            @endif

                        </div>
                    
                        <div class="form-group{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" name="password" placeholder="******" class="form-control">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @else
                                <span class="help-block small">Your strong password</span>
                            @endif

                        </div>
                    
                        <div>
                            <button class="btn btn-accent" type="submit">Login</button>
                            <a class="btn btn-default" href="{{ url('/register') }}">Register</a>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="vendor/pacejs/pace.min.js"></script>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- App scripts -->
<script src="scripts/luna.js"></script>

</body>

</html>

