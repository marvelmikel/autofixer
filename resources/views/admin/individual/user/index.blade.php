@extends('layouts.admin')

@section('content')

 <div class="row">
            <div class="col">
                <div class="card radius-10 mb-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Recent Users</h5>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('vechicle-ic.index') }}" class="btn btn-success btn-sm radius-30">View User's Vehicle</a>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('services.index') }}" class="btn btn-warning btn-sm radius-30">View Services</a>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('documents.create') }}" class="btn btn-info btn-sm radius-30">Send Document</a>
                            </div>
                            <!--  <div class="ms-auto">
                                <a href="" class="btn btn-danger btn-sm radius-30">Add Vehicle</a>
                            </div> -->
                        </div>

                       <div class="table-responsive mt-3">
                           <table class="table align-middle mb-0">
                               <thead class="table-light">
                             
                                   <tr>
                                       <th>Id</th>
                                       <th>Individual Name</th>
                                       <th>Individual city</th>
                                        <th>Individual Email</th>
                                         <th> Phone Number</th>
                                          <th>UserName</th>
                                           <th>Status</th>
                                      
                                       <th>Actions</th>
                                   </tr>
                            
                               </thead>
                               <tbody>
                               @foreach ($users as $key=>$users)
                                   <tr>
                                       <td>{{ $key + 1 }}</td>
                                       <td>
                                        <div class="d-flex align-items-center">
                                            <!--<div class="recent-product-img">
                                                <img src="assets/images/products/15.png" alt="">
                                            </div>-->
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">{{ $users->name}}</h6>
                                            </div>
                                        </div>
                                       </td>
                                        <td>{{ $users->city}}</td>
                                        <td>{{ $users->email}}</td>
                                        <td>{{ $users->phone}}</td>
                                        <td>{{ $users->username}}</td>
                                       <td class=""><span class="badge bg-light-success text-success w-100">Subcriber  </span></td>
                                       <td>
                                        <div class="d-flex order-actions">
                                        <a href="{{ route('users.edit',$users->id)}}" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        
                                        	
  <form id="delete-form-{{ $users->id }}" action="{{ route('users.destroy',$users->id) }}" method="POST"  >
												@csrf
												@method('DELETE')
										<a href="javascript:;" onclick="deleteVechicle({{ $users->id }})" class="text-danger bg-light-danger border-0">
									
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