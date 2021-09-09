<!doctype html><html class="no-js" lang=""><head>
    <meta charset="utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>تسجيل دخول | Saturn Center</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
            ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
============================================ -->
    {{--
			<link rel="stylesheet" href="css/font-awesome.min.css">--}}

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- owl.carousel CSS
============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- wave CSS
============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- main CSS
============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
============================================ -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- responsive CSS
============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an
    <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->
<!-- Login Register area Start-->
<div class="login-content">

    <!-- Login -->
    <div class="nk-block toggled" id="l-login">

        <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="nk-form">
            <div class="input-group">
                <span class="input-group-addon nk-ic-st-pro">
                    <i class="notika-icon notika-support"></i>
                </span>

                <div class="nk-int-st">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="اسم المستخدم" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>



            </div>
            <div class="input-group mg-t-15">
                <span class="input-group-addon nk-ic-st-pro">
                    <i class="notika-icon notika-edit"></i>
                </span>
                <div class="nk-int-st">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="كلمة السر" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            {{--<div class="fm-checkbox">--}}
                {{--<input class="i-checks" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                {{--<label class="form-check-label" for="remember">--}}
                    {{--{{ __('Remember Me') }}--}}
                {{--</label>--}}
            {{--</div>--}}

            <button  class="btn btn-login btn-success btn-float">
                <i class="notika-icon notika-right-arrow right-arrow-ant"></i>

            </button>
        </div>

        </form>









        <div class="nk-navigation nk-lg-ic">
            {{--<a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-register">--}}
                {{--<i class="notika-icon notika-plus-symbol"></i>--}}
                {{--<span>Register</span>--}}
            {{--</a>--}}


            {{--@if (Route::has('password.request'))--}}
                {{--<a  href="{{ route('password.request') }}" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password">--}}
                    {{--<i>?</i>--}}
                    {{--<span>Forgot Password</span>--}}
                {{--</a>--}}
            {{--@endif--}}

        </div>



    </div>









    <!-- Register -->
    {{--<div class="nk-block" id="l-register">--}}
        {{--<div class="nk-form">--}}
            {{--<div class="input-group">--}}
																									{{--<span class="input-group-addon nk-ic-st-pro">--}}
																										{{--<i class="notika-icon notika-support"></i>--}}
																									{{--</span>--}}
                {{--<div class="nk-int-st">--}}
                    {{--<input type="text" class="form-control" placeholder="Username">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="input-group mg-t-15">--}}
																										{{--<span class="input-group-addon nk-ic-st-pro">--}}
																											{{--<i class="notika-icon notika-mail"></i>--}}
																										{{--</span>--}}
                {{--<div class="nk-int-st">--}}
                    {{--<input type="text" class="form-control" placeholder="Email Address">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="input-group mg-t-15">--}}
																											{{--<span class="input-group-addon nk-ic-st-pro">--}}
																												{{--<i class="notika-icon notika-edit"></i>--}}
																											{{--</span>--}}
                {{--<div class="nk-int-st">--}}
                    {{--<input type="password" class="form-control" placeholder="Password">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float">--}}
                {{--<i class="notika-icon notika-right-arrow"></i>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="nk-navigation rg-ic-stl">--}}
            {{--<a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-login">--}}
                {{--<i class="notika-icon notika-right-arrow"></i>--}}
                {{--<span>Sign in</span>--}}
            {{--</a>--}}
            {{--<a href="" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password">--}}
                {{--<i>?</i>--}}
                {{--<span>Forgot Password</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{----}}
    {{----}}
    {{----}}





    <!-- Forgot Password -->
    {{--<div class="nk-block" id="l-forget-password">--}}
        {{--<div class="nk-form">--}}
            {{--<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>--}}
            {{--<div class="input-group">--}}
																												{{--<span class="input-group-addon nk-ic-st-pro">--}}
																													{{--<i class="notika-icon notika-mail"></i>--}}
																												{{--</span>--}}
                {{--<div class="nk-int-st">--}}
                    {{--<input type="text" class="form-control" placeholder="Email Address">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<a href="#l-login" data-ma-action="nk-login-switch" data-ma-block="#l-login" class="btn btn-login btn-success btn-float">--}}
                {{--<i class="notika-icon notika-right-arrow"></i>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="nk-navigation nk-lg-ic rg-ic-stl">--}}
            {{--<a href="" data-ma-action="nk-login-switch" data-ma-block="#l-login">--}}
                {{--<i class="notika-icon notika-right-arrow"></i>--}}
                {{--<span>Sign in</span>--}}
            {{--</a>--}}
            {{--<a href="" data-ma-action="nk-login-switch" data-ma-block="#l-register">--}}
                {{--<i class="notika-icon notika-plus-symbol"></i>--}}
                {{--<span>Register</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}






</div>

</body>
</html>