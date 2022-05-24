<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auto-Fixer Individual | Register </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/fontawesome-all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/font/flaticon.css') }}">
    <!-- Google Web Fonts -->
    <link href="../../../../fonts.googleapis.com/css89ea.css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">
</head>

<body >
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif] style="background: #fc0000"-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout31" >
        <span class="fxt-shape fxt-animation-active"></span>
        <div class="fxt-content-wrap" >
            <div class="fxt-heading-content" >
                <div class="fxt-inner-wrap" >
                    <div class="fxt-transformY-50 fxt-transition-delay-3" >
                        <a href="login-31.html" class="fxt-logo"><img src="{{ URL::asset('assets/img/logo-31.png') }}" alt="Logo"></a>
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <h1 class="fxt-main-title">QUALITY IN CAR REPAIR.</h1>
                    </div>
                    <div class="fxt-login-option">
                        <ul>
                            <li class="fxt-transformY-50 fxt-transition-delay-6"><a href="{{ route('company.login') }}">Sign in as a Company</a></li>
                            <li class="fxt-transformY-50 fxt-transition-delay-7"><a href="{{ route('individual.login') }}">Sign in as an Individual</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fxt-form-content">
                <div class="fxt-page-switcher">
                    <h2 class="fxt-page-title mr-3">individual Register</h2>
                    <ul class="fxt-switcher-wrap">
                        <li><a href="{{ route('individual.login') }}" class="fxt-switcher-btn">Login</a></li>
                        <li><a href="{{ route('individual.register') }}" class="fxt-switcher-btn active">Register</a></li>
                    </ul>
                </div>
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap">
                    <form method="POST" action="{{ route('individual.register') }}">
                        @csrf
                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="text" id="fname" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  placeholder="Individual Name" required="required"  autocomplete="name" autofocus>
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="phone" id="fname" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  placeholder="Individual Phone" required="required"  autocomplete="phone" autofocus>
                                        @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="text" id="fname" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}"  placeholder="Individual city" required="required" autocomplete="city" autofocus>
                                        @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Individual Email" required="required"  autocomplete="email" autofocus>
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="fname" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  placeholder="UserName" required autocomplete="username" autofocus>
                                        @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="password" id="cpassword" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="fxt-btn-fill">{{ __('Register') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="fxt-switcher-description">Already a Member?<a href="login-31.html" class="fxt-switcher-text ms-1">Go to Sign In</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer">
        <p class="mb-0" style="color:black;" align="center">© Copyright 2022. Autofixer Nigeria limited.</p>
    </footer>
    <!-- jquery-->
    <script src="{{ URL::asset('assets/js/jquery-3.5.0.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ URL::asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ URL::asset('assets/js/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>

</body>


</html>
