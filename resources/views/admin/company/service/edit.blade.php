@extends('layouts.admin')

@section('content')
<div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add New Service</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('company.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">New Service</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col">
                <h6 class="mb-0 text-uppercase">Please kindly Input Service Information</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation" novalidate action="{{ route('service.update',$user->id) }}" method="POST" enctype="multipart/form-data">
				@method('PUT')
                @csrf
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Repair Date</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="r_date" value="{{$user->r_date}}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Repair Type                                    </label>
                                    <input type="text" class="form-control" id="validationCustom02" name="r_type" value="{{$user->r_type}}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Repair Cost  </label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="r_cost" value="{{$user->r_cost}}" required>
                                        <div class="invalid-feedback">Please provide a Vehicle Model.</div>
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Maintenance Date</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="m_date" value="{{$user->m_date}}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Maintenance Type                                    </label>
                                    <input type="text" class="form-control" id="validationCustom02" name="m_type" value="{{$user->m_type}}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Maintenance Cost  </label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="m_cost" value="{{$user->m_cost}}" required>
                                        <div class="invalid-feedback">Please provide a Vehicle Model.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- <label for="validationCustom04" class="form-label">User Id</label> -->
                                    <input text class="form-select" id="validationCustom04" type="hidden" value="{{ $user->user_id }}" name="user_id" >
                                    <div class="invalid-feedback">Please provide a valid Vehicle Registration Number.</div>
                                </div>
                              
                               
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck"><a href="{{ ('tc') }}">Agree to terms and conditions</a></label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Update Service</button>
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