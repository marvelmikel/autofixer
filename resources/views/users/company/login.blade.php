<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auto-Fixer Company| Login </title>
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
<body>

    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout31">
        <span class="fxt-shape fxt-animation-active"></span>
        <div class="fxt-content-wrap">
            <div class="fxt-heading-content">
                <div class="fxt-inner-wrap">
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <a href="login-31.html" class="fxt-logo"><img src="{{ URL::asset('assets/img/logo-31.png') }}" alt="Logo"></a>
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <h1 class="fxt-main-title">QUALITY IN CAR DIAGNOSIS.</h1>
                    </div>
                    <div class="fxt-login-option">
                        <ul>
                            <li class="fxt-transformY-50 fxt-transition-delay-6"><a href="{{ route('company.login') }}">Sign in as a Company</a></li>
                            <li class="fxt-transformY-50 fxt-transition-delay-7"><a href="{{ route('individual.login') }}">Sign in as an Individual</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
            <div class="fxt-form-content">
                <div class="fxt-page-switcher">
                    <h2 class="fxt-page-title mr-3">Company-Login</h2>
                    <ul class="fxt-switcher-wrap">
                        <li><a href="{{ route('company.login') }}" class="fxt-switcher-btn active">Login</a></li>
                        <li><a href="{{ route('company.register') }}" class="fxt-switcher-btn">Register</a></li>
                    </ul>
                </div>
                <div class="fxt-main-form">
                @if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                    <div class="fxt-inner-wrap">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="row">
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
                                <div class="col-12">
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="********" required autocomplete="current-password">

                                        <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>

                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="fxt-checkbox-wrap">
                                            <div class="fxt-checkbox-box mr-3">
                                                <input id="checkbox1" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="checkbox1" class="ps-4">Keep me logged in</label>
                                            </div>
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('forget.password.get') }}" class="fxt-switcher-text"> {{ __('Forgot Your Password?') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="fxt-btn-fill">{{ __('Login') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="fxt-switcher-description">Don't have an account?<a href="register-31.html" class="fxt-switcher-text ms-1">Register</a></div>
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
