
@extends('layouts.admin')

@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Vehicle</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Vehicles</li>
                    </ol>
                </nav>
            </div>
            <!--<div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>-->
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col">
                <h6 class="mb-0 text-uppercase">Please kindly Input Vehicle Details</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                          
                            <form class="row g-3 needs-validation" novalidate action="{{ route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="{{ $user->c_name}}" name="c_name" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Company Address                                </label>
                                    <input type="text" class="form-control" id="validationCustom02" name="c_address" value="{{ $user->c_address}}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Company Email  </label>
                                    <div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{ $user->c_email}}" name="c_email" required>
                                        <div class="invalid-feedback">Please provide a Vehicle Model.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Company Phone  </label>
                                    <div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{ $user->c_phone}}" name="c_phone" required>
                                        <div class="invalid-feedback">Please provide a Vehicle Model.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Personal Phone</label>
                                    <input type="text" class="form-control" id="validationCustom03" value="{{ $user->p_phone}}" name="p_phone" required>
                                    <div class="invalid-feedback">Please provide a valid Vehicle VIN/Chassis Number.</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Personal name</label>
                                    <input type="text" class="form-control" id="validationCustom03" value="{{ $user->p_name}}" name="p_name" required>
                                    <div class="invalid-feedback">Please provide a valid Vehicle VIN/Chassis Number.</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Personal email</label>
                                    <input type="text" class="form-control" id="validationCustom03" value="{{ $user->p_email}}" name="p_email" required>
                                    <div class="invalid-feedback">Please provide a valid Vehicle VIN/Chassis Number.</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Personal position</label>
                                    <input type="text" class="form-control" id="validationCustom03" value="{{ $user->p_position}}" name="p_position" required>
                                    <div class="invalid-feedback">Please provide a valid Vehicle VIN/Chassis Number.</div>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">Username</label>
                                    <input text class="form-select" id="validationCustom04" value="{{ $user->username}}" name="username" required>
                                    <div class="invalid-feedback">Please provide a valid Vehicle Registration Number.</div>
                                </div>
                                <!-- <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div> -->
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>

@endsection
