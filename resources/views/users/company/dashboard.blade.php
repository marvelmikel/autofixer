@extends('layouts.company')

@section('content')

      <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0">Wallet</p>
                                <h5 class="mb-0">₦</h5>
                            </div>
                            <div class="ms-auto">	<i class='bx bx-wallet font-30'></i>
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
                                <p class="mb-0">Total Vehicles</p>
                                <h5 class="mb-0">{!! $vechicles->count() !!}</h5>
                            </div>
                            <div class="ms-auto">	<i class='bx bx-cart font-30'></i>
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
                                <p class="mb-0">Total Repairs</p>
                                <h5 class="mb-0">{!! $repairs->count() !!}</h5>
                            </div>
                            <div class="ms-auto">	<i class='bx bx-group font-30'></i>
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
                                <p class="mb-0">Total Maintainance</p>
                                <h5 class="mb-0">{!! $repairs->count() !!}</h5>
                            </div>
                            <div class="ms-auto">	<i class='bx bx-chat font-30'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart4"></div>
                </div>
            </div>
      </div><!--end row-->


        <div class="row">
            <div class="col">
                <div class="card radius-10 mb-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Recent Vehicles </h5>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('vechicle.create') }}" class="btn btn-primary btn-sm radius-30">Add Vehicle</a>
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
                                         <th>Date</th>
                                       <th>Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                               @foreach($vechicles as $key=>$vechicle)
                           <tr>
                               
                               <th>{{ $key + 1 }}</th>
                               <th>{{$vechicle->v_make}}</th>
                               <th>{{$vechicle->v_model}}</th>
                                <th>{{$vechicle->v_year}}</th>
                                 <th>{{$vechicle->vin}}</th>
                                  <th>{{$vechicle->v_reg}}</th>

                                 <th>{{ $vechicle->created_at->toFormattedDateString() }}</th>
                               <td>
                                <div class="d-flex order-actions">	
                                <a href="{{ route('vechicle.edit',$vechicle->id) }}" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>


  <form id="delete-form-{{ $vechicle->id }}" action="{{ route('vechicle.destroy',$vechicle->id) }}" method="POST"  >
												@csrf
												@method('DELETE')
										<a href="javascript:;" onclick="deleteVechicle({{ $vechicle->id }})" class="text-danger bg-light-danger border-0">
									
									<button type="submit" class='bx bxs-trash'></button></a>
									
											</form>

                                 
                                </div>
                               </td>
                           </tr>
                      @endforeach
                               </tbody>
                           </table>
                       </div>

                    </div>
                </div>
            </div>
        </div><!--end row-->



@endsection
