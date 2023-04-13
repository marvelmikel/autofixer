
@extends('layouts.admin')

@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Individual</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href=""><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Individuals</li>
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
                <h6 class="mb-0 text-uppercase">Please kindly Input Individual Details</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                          
                            <form class="row g-3 needs-validation" novalidate action="{{ route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
				@method('PUT')
				@csrf
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Individual Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" value="{{ $user->name}}" name="name" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Individual city                                </label>
                                    <input type="text" class="form-control" id="validationCustom02" name="city" value="{{ $user->city}}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Individual Email  </label>
                                    <div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{ $user->email}}" name="email" required>
                                        <div class="invalid-feedback">Please provide a Individual Model.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Individual Phone  </label>
                                    <div class="input-group has-validation"> <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" value="{{ $user->phone}}" name="phone" required>
                                        <div class="invalid-feedback">Please provide a Individual Model.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom03" class="form-label">Individual Username</label>
                                    <input type="text" class="form-control" id="validationCustom03" value="{{ $user->username}}" name="username" required>
                                    <div class="invalid-feedback">Please provide a valid Individual VIN/Chassis Number.</div>
                                </div>
                            
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
