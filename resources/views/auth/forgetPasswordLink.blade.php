<!-- @extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Reset Password</div>
                  <div class="card-body">
  
                      <form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
  
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
                                  <input type="password" id="password" class="form-control" name="password" required autofocus>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>
                                  @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Reset Password
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection
 -->













<!DOCTYPE html>

<html lang="en">

<head>

	<!-- Required meta tags -->

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--favicon-->

	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="{{ URL::asset('u/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ URL::asset('u/assets/js/pace.min.js')}}"></script>

	<!-- Bootstrap CSS -->
	<link href="{{ URL::asset('u/assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('u/assets/css/bootstrap-extended.css') }}" rel="stylesheet">

	<link href="../../../../fonts.googleapis.com/css276c7.css?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

	<link href="{{ URL::asset('u/assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('u/assets/css/icons.css') }}" rel="stylesheet">
	<title>Synadmin –</title>

</head>



<body>

	<!-- wrapper -->

	<div class="wrapper">

		<div class="authentication-header"></div>

		 <div class="authentication-reset-password d-flex align-items-center justify-content-center">

			<div class="row">

				<div class="col-12 col-lg-10 mx-auto">

					<div class="card">

						<div class="row g-0">

							<div class="col-lg-5 border-end">

								<div class="card-body">

									<div class="p-5">

										<div class="text-start">

											<img src="assets/images/logo-img.png" width="180" alt="">

										</div>

										<h4 class="mt-5 font-weight-bold">Genrate New Password</h4>

										<p class="text-muted">We received your reset password request. Please enter your new password!</p>

										<form action="{{ route('reset.password.post') }}" method="POST">
                          @csrf
                          <input type="hidden" name="token" value="{{ $token }}">
						  <div class="mb-3 mt-5">

						  <label class="form-label">Email Address</label>
 <input type="email"  class="form-label" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
</div>
  
										<div class="mb-3 mt-5">
									
											<label class="form-label">New Password</label>

											<input type="password" class="form-control" name="password" required autofocus placeholder="Enter new password" />
											@if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif

										</div>

										<div class="mb-3">

											<label class="form-label">Confirm Password</label>

											<input type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required autofocus />
											@if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
										</div>

										<div class="d-grid gap-2">

											<button type="submit" class="btn btn-primary">Change Password

											</button>
											</form>

											<a href="{{route('individual.login')}}" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>

										</div>

									</div>

								</div>

							</div>

							<div class="col-lg-7">

								<img src="{{ URL::asset('u/assets/images/login-images/forgot-password-frent-img.jpg') }}" class="card-img login-img h-100" alt="...">

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- end wrapper -->

</body>


</html>