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
                    <div class="ms-auto">
                        <a href="{{ route('vechicle.create') }}" class="btn btn-primary btn-sm radius-30">Add Vehicle</a>
                    </div>
                </div>
               <div class="table-responsive mt-3">
                   <table class="table align-middle mb-0">
                       <thead class="table-light">
                     
                           <tr>
                               <th>#</th>
                               <th>Vechicle Make</th>
                               <th>Vechicle Model</th>
                                <th>Vechicle Year</th>
                                 <th>Vechicle VIN/Chassis Number</th>
                                  <th>Vechicle Registration Number</th>

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

<!-- <script src="{{ URL::asset('assets/js/sweet.js') }}"></script> -->
<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteVechicle(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection
