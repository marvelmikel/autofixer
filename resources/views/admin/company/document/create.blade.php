@extends('layouts.admin')

@section('content')
<!--start page wrapper -->

			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Documents</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">File Upload</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
				<form class="row g-3 needs-validation" novalidate action="{{ route('document.store') }}" method="POST" enctype="multipart/form-data">
				@method('POST')
                @csrf

					<div class="col-xl-9 mx-auto {{ $errors->has('users') ? 'focused error' : '' }}">
						<label for="validationCustom04" class="form-label">Select User</label>
                                            <select class="form-select" name="users" id="validationCustom04" required>
											<option selected disabled value="">Choose...</option>
											@foreach($users as $user)

                                                <option value="{{ $user->id }}">{{ $user->username }}</option>
												@endforeach>
                                   </select>
					</div>
				</div>
				<!--end row-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase"></h6>
						<hr/>
						<div class="card">
							<div class="card-body">

								<label for="validationCustom04" class="form-label">Invoice File</label>
									<input id="image-uploadify" type="file" name="invoice" accept="" multiple>
                                </div>
                                <div class="card-body">

									<label for="validationCustom04" class="form-label">Diagnotics File</label>
									<input id="image-uploadify" name="report" type="file" accept="" multiple>
							</div>
							<div class="card-body">
                                    <label for="validationCustom01" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="description" placeholder="Input Description" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <br>

							<div align="center">
                                    <button class="btn btn-primary" type="submit">Send</button>
                                </div>
                                <br>
						</div>
					</div>
				</div>
				</form>
				<!--end row-->
			</div>

		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->

@endsection
