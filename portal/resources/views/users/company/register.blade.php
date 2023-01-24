<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auto-Fixer Company|Register </title>
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
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
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
                        <h1 class="fxt-main-title">QUALITY IN CAR MAINTENANCE.</h1>
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
                    <h2 class="fxt-page-title mr-3">Company Register</h2>
                    <ul class="fxt-switcher-wrap">
                        <li><a href="{{ route('company.login') }}" class="fxt-switcher-btn">Login</a></li>
                        <li><a href="{{ route('company.register') }}" class="fxt-switcher-btn active">Register</a></li>
                    </ul>
                </div>
                <div class="fxt-main-form">
                    <div class="fxt-inner-wrap">
                    <form method="POST" action="{{ route('company.register') }}">
                        @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="text" id="fname" class="form-control @error('c_name') is-invalid @enderror" name="c_name" value="{{ old('c_name') }}"  placeholder="Company Name" required="required" autocomplete="c_name" autofocus>
                                        @error('c_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="text" id="fname" class="form-control @error('c_address') is-invalid @enderror" name="c_address" value="{{ old('c_address') }}"  placeholder="Company Address" required="required" autocomplete="c_address" autofocus>
                                        @error('c_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control @error('c_email') is-invalid @enderror" name="c_email" value="{{ old('c_email') }}"  placeholder="Company Email" required="required" autocomplete="c_email" autofocus>
                                        @error('c_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="phone" id="fname" class="form-control @error('c_phone') is-invalid @enderror" name="c_phone" value="{{ old('c_phone') }}"  placeholder="Company Phone" required="required" autocomplete="c_phone" autofocus>
                                        @error('c_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="text" id="fname" class="form-control @error('p_name') is-invalid @enderror" name="p_name" value="{{ old('p_name') }}"  placeholder="Personal Name" required="required"  autocomplete="p_name" autofocus>
                                        @error('p_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="phone" id="fname" class="form-control @error('p_phone') is-invalid @enderror" name="p_phone" value="{{ old('p_phone') }}"  placeholder="Personal Phone" required="required"  autocomplete="p_phone" autofocus>
                                        @error('p_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="text" id="fname" class="form-control @error('p_position') is-invalid @enderror" name="p_position" value="{{ old('p_position') }}"  placeholder="Personal Position" required="required" autocomplete="p_position" autofocus>
                                        @error('p_position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="p_email" value="{{ old('email') }}"  placeholder="Personal Email" required="required"  autocomplete="email" autofocus>
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="lname" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  placeholder="UserName" required="required" autocomplete="username" autofocus>
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
                        <!-- <div class="fxt-switcher-description">Already a Member?<a href="#" class="fxt-switcher-text ms-1">Go to Sign In</a></div> -->
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
