
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

	<title>Autofixer </title>

</head>



<body>

	<!-- wrapper -->

	<div class="wrapper">

		<div class="authentication-header"></div>

		<div class="authentication-forgot d-flex align-items-center justify-content-center">

			<div class="card forgot-box">

				<div class="card-body">

					<div class="p-4 rounded">

						<div class="text-center">

							<img src="{{ URL::asset('u/assets/images/icons/lock.png') }}" width="120" alt="" />

						</div>

						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>

						<p class="text-muted">Enter your registered email ID to reset the password</p>

						@if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                      <form action="{{ route('forget.password.post') }}" method="POST">
                          @csrf
						<div class="my-4">

							<label class="form-label">Email id</label>

							<input type="email" class="form-control form-control-lg" name="email" required autofocus placeholder="example@user.com" />
							@if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
						</div>

						<div class="d-grid gap-2">

							<button type="submit" class="btn btn-primary btn-lg">
								 Send Password Reset Link

							</button>
							</form>
							 <a href="{{ route('individual.login')}}" class="btn btn-white btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- end wrapper -->

</body>






</html>
