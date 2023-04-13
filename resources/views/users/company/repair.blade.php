@extends('layouts.company')

@section('content')

<div class="row">
    <div class="col">
        <div class="card radius-10 mb-0">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">All Vehicles </h5>
                    </div>
                   
                </div>
               <div class="table-responsive mt-3">
                   <table class="table align-middle mb-0">
                       <thead class="table-light">
                     
                           <tr>
                               <th>#</th>
                               <th>Repairs Cost</th>
                               <th>Repairs Type</th>
                                <th>Repairs Date</th>
                                

                                 <th>Date Created</th>
                             
                           </tr>
                          
                       </thead>
                       <tbody>
                       @foreach($vechicles as $key=>$vechicle)
                           <tr>
                               
                               <th>{{ $key + 1 }}</th>
                               <th>{{$vechicle->r_cost}}</th>
                               <th>{{$vechicle->r_type}}</th>
                                <th>{{$vechicle->r_date}}</th>
                              

                                 <th>{{ $vechicle->created_at->toFormattedDateString() }}</th>
                              
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
