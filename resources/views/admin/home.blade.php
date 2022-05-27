@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <h1 style="sont-size:100px;">Welcome to Admin Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Total User Wallet</p>
                                <h5 class="mb-0">₦</h5>
                            </div>
                            <div class="ms-auto">   <i class='bx bx-wallet font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart2"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Total User Registered Vehicles</p>
                                <h5 class="mb-0">{!! $vechicle->count() !!}</h5>
                            </div>
                            <div class="ms-auto">   <i class='bx bx-cart font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart1"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Total User Repairs</p>
                                <h5 class="mb-0">{!! $service->count() !!}</h5>
                            </div>
                            <div class="ms-auto">   <i class='bx bx-group font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart3"></div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Total User Maintainance</p>
                                <h5 class="mb-0">{!! $service->count() !!}</h5>
                            </div>
                            <div class="ms-auto">   <i class='bx bx-chat font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart4"></div>
                </div>
            </div>
      </div><!--end row-->

<!-- 
        <div class="row">
            <div class="col">
                <div class="card radius-10 mb-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Recent Vehicles </h5>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ ('addvehicles') }}" class="btn btn-primary btn-sm radius-30">Add Vehicle</a>
                            </div>
                        </div>

                       <div class="table-responsive mt-3">
                           <table class="table align-middle mb-0">
                               <thead class="table-light">
                                   <tr>
                                       <th>Id</th>
                                       <th>Vehicle Make</th>
                                       <th>Vehicle Model</th>
                                        <th>Vehicle Year</th>
                                         <th>Vehicle VIN/Chassis Number</th>
                                          <th>Vehicle Registration Number</th>
                                        <th>Status</th>
                                         <th>Date</th>
                                       <th>Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td>
                                        <div class="d-flex align-items-center">
                                            <!--<div class="recent-product-img">
                                                <img src="assets/images/products/15.png" alt="">
                                            </div>--
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">BMW</h6>
                                            </div>
                                        </div>
                                       </td>
                                        <td>Sedan. Maruti Suzuki Ciaz</td>
                                          <td>2002</td>
                                            <td>14925</td>
                                              <td>pxd149.25</td>
                                       <td class=""><span class="badge bg-light-success text-success w-100">Subcriber  </span></td>
                                       <td>22 Jun, 2020</td>

                                       <td>
                                        <div class="d-flex order-actions">  <a href="javascript:;" class="text-danger bg-light-warning border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                       </td>
                                   </tr>
                                   <tr>
                                    <td>2</td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                         <!--<div class="recent-product-img">
                                             <img src="assets/images/products/16.html" alt="">
                                         </div>--
                                         <div class="ms-2">
                                             <h6 class="mb-1 font-14">Chevrolet</h6>
                                         </div>
                                     </div>
                                    </td>
                                    <td>Sedan. Maruti Suzuki Ciaz</td>
                                      <td>2009</td>
                                        <td>14925</td>
                                          <td>149ekck25</td>

                                    <td class=""><span class="badge bg-light-warning text-warning w-100">Non-subcriber</span></td>
                                    <td>22 Jun, 2020</td>

                                    <td>
                                        <div class="d-flex order-actions">  <a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                     <div class="d-flex align-items-center">
                                         <!--<div class="recent-product-img">
                                             <img src="assets/images/products/19.png" alt="">
                                         </div>--
                                         <div class="ms-2">
                                             <h6 class="mb-1 font-14">Cadillac</h6>
                                         </div>
                                     </div>
                                    </td>
                                    <td>Crossover. Volvo S60 Cross Country.</td>
                                      <td>1997</td>
                                        <td>149.25</td>
                                          <td>sdk14925</td>
                                    <td class=""><span class="badge bg-light-warning text-warning w-100">Non-subcriber</span></td>
                                    <td>22 Jun, 2020</td>


                                    <td>
                                        <div class="d-flex order-actions">  <a href="javascript:;" class="text-danger bg-light-danger border-0"><i class='bx bxs-trash'></i></a>
                                            <a href="javascript:;" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        </div>
                                    </td>
                                </tr>



                               </tbody>
                           </table>
                       </div>

                    </div>
                </div>
            </div>
        </div> -->
        <!--end row-->


@endsection
