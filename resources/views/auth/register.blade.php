<!-- resources/views/auth/register.blade.php -->

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
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
        <div class="back-link">
            <a href="/dashboard" class="btn btn-accent">Back to Dashboard</a>
        </div>

        <div class="container-center lg animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-add-user"></i>
                </div>
                <div class="header-title">
                    <h3>Register</h3>
                    <small>
                        Please enter your data to register.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <p>

                    </p>
                    <form method="POST" action="/auth/register" id="loginForm" novalidate>
                    {!! csrf_field() !!}
                        <div class="row">


                            <div class="form-group col-lg-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label>Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                <span class="help-block small">Your actual human name</span>


                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                            </div>


                            <div class="form-group col-lg-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <span class="help-block small">Your hard to guess password</span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>


                            <div class="form-group col-lg-6 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label>Repeat Password</label>
                                <input type="password" name="password_confirmation" value="" class="form-control">
                                <span class="help-block small">Please repeat your pasword</span>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif

                            </div>


                            <div class="form-group col-lg-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label>Email Address</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                <span class="help-block small">Your address email to contact</span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            </div>


                        </div>
                        <div>
                            <button class="btn btn-accent" type="submit">Register</button>
                            <a class="btn btn-default" href="/login">Login</a>
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