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
                        <form class="row g-3 needs-validation" novalidate action="{{ route('service.store') }}" method="POST">
				@method('POST')
                @csrf
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Repair Date</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="r_date" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Repair Type                                    </label>
                                    <input type="text" class="form-control" id="validationCustom02" name="r_type" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Repair Cost  </label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="r_cost" required>
                                        <div class="invalid-feedback">Please provide a Vehicle Model.</div>
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                                    <label for="validationCustom01" class="form-label">Maintenance Date</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="m_date" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom02" class="form-label">Maintenance Type                                    </label>
                                    <input type="text" class="form-control" id="validationCustom02" name="m_type" required>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustomUsername" class="form-label">Maintenance Cost  </label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="m_cost" required>
                                        <div class="invalid-feedback">Please provide a Vehicle Model.</div>
                                    </div>
                                </div>
                                <div class="col-md-6 {{ $errors->has('users') ? 'focused error' : '' }}">
                                            <label for="validationCustom04" class="form-label">Select User Under Company Section</label>
                                            <select class="form-select"  id="validationCustom04" name="users" required>
                                            <option selected disabled >Choose...</option>
                                                @foreach($users as $user)

                                                <option value="{{ $user->id }}">{{ $user->c_name }}</option>
                                                @endforeach>
                                            </select>
                                            <div class="invalid-feedback">Please select a valid servcice.</div>
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