
<!DOCTYPE html>
<html>


<!-- Mirrored from demo.lorvent.com/fitness/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Feb 2025 01:44:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión | Max Power Gym</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="vendors/iCheck/skins/all.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="css/custom_css/login.css" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated">
                <img src="{{ asset('imgmpg/logobnp.png') }}" alt="Awesome Image" id="skin-logo-img" class="img-fluid" style="max-width: 30%;" />
                <h3 class="text-center">Iniciar sesión</h3>
                <form class="form" id="log_in" method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required>
                        <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <div style="color: blue; font-size: 16px; background-color: yellow; padding: 5px; border-radius: 5px;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                        <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> -->

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <div style="color: blue; font-size: 16px; background-color: yellow; padding: 5px; border-radius: 5px;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    </span>
                        @enderror
                    </div>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recordar Contraseña

                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Iniciar Sesión">
                    
                </form>
                <p class="text-right">
                @if (Route::has('password.request'))
                    <a class='text-warning forgot_color' href="{{ route('password.request') }}" style='color: white'>
                    ¿Has olvidado tu contraseña?
                    </a>
                    @endif
                </p>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="vendors/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="js/custom_js/login1.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Feb 2025 01:44:54 GMT -->
</html>
