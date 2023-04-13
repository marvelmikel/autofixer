@extends('layouts.individual')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Individual User Profile</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
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
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{URL::asset('u/assets/images/logo-icon.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <!-- <h4>MIS</h4> -->
                                        <p class="text-secondary mb-1">{{ $user->name}}</p>
                                        <p class="text-muted font-size-sm">{{ $user->email}}</p>
                                        <span class="badge bg-light-success text-success w-100">Subcriber  </span>
                                    
                                        <!-- <a href=""><button class="btn btn-primary">Change Password</button></a> -->
                                        <!--<button class="btn btn-outline-primary">Message</button>-->
                                    </div>
                                </div>
                                <hr class="my-4" />
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                       


                        <div class="card">
                            <div class="card-body">
                            <form method="post" action="{{ route('profile.edit_validations', Auth::user())}}">
                                @method('PUT')
                                    @csrf
                              
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Individual Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="name" value="{{ $user->name}}" />
                                       
                                    </div>
                                </div>
                              
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Individual Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" class="form-control" name="email" value="{{ $user->email}}" />
                                      
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="phone" value="{{ $user->phone}}" />
                                      
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">City</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="city" value="{{ $user->city}}" />
                                       
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Username </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="username" value="{{ $user->username}}" />
                                       
                                    </div>
                                </div>
                                <!-- <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Password </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name="password" value="" />
                                       
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" />

                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
