


<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AutoFixer | Admin</title>
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
                        <h1 class="fxt-main-title">Administrator Login Side .</h1>
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
                    <h2 class="fxt-page-title mr-3">Admin-Login</h2>
                    <!-- <ul class="fxt-switcher-wrap">
                        <li><a href="{{ route('individual.login') }}" class="fxt-switcher-btn active">Login</a></li>
                        <li><a href="{{ route('individual.register') }}" class="fxt-switcher-btn">Register</a></li>
                    </ul> -->
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
                                        <input type="text" id="fname" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="email" required autocomplete="email" autofocus>
                                        @error('email')
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
                        <!-- <div class="fxt-switcher-description">Don't have an account?<a href="register-31.html" class="fxt-switcher-text ms-1">Register</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
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



























































<!-- 


@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Login</div>
                  <div class="card-body">
  
                      <form action="{{ route('login') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <a href="{{ route('forget.password.get') }}">Reset Password</a>
                                      </label>
                                  </div>
                              </div>
                          </div>
    
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection -->