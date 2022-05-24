@extends('layouts.admin')

@section('content')
 <div class="row">
            <div class="col">
                <div class="card radius-10 mb-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-1">Recent Services </h5>
                            </div>
                          
                            <div class="ms-auto">
                                <a href="{{ route('vechicle-ic.index') }}" class="btn btn-warning btn-sm radius-30">View Vechicles</a>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('documents.create') }}" class="btn btn-info btn-sm radius-30">Send Document</a>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('users.index') }}" class="btn btn-success btn-sm radius-30">View Users</a>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm radius-30">Create Services</a>
                            </div>
                        </div>

                       <div class="table-responsive mt-3">
                           <table class="table align-middle mb-0">
                               <thead class="table-light">
                                   <tr>
                                       <th>Id</th>
                                    
                                       <th>Individual name</th>
                             
                                       <th>Repair Date</th>
                                        <th>Repair Type</th>
                                         <th>Repair Cost</th>
                                         <th>Maintenance Date</th>
                                        <th>Maintenance Type</th>
                                         <th>Maintenance Cost</th>
                                  
                                     
                                         <th>Date</th>
                                       <th>Actions</th>
                                   </tr>
                               </thead>
                               <tbody>
                               
                               @foreach($vechicles as $key=>$vechicle)
                               @foreach($users as $key=>$user)
                               @if($vechicle->user_id  == $user->id)
                                   <tr>
                                   <td>{{ $key + 1}}</td>
                                 
                                    
                                       <td>{{ $user->name}}</td>
                                    
                               <th>{{$vechicle->r_date}}</th>
                                <th>{{$vechicle->r_type}}</th>
                                 <th>{{$vechicle->r_cost}}</th>
                                 <th>{{$vechicle->m_date}}</th>
                                <th>{{$vechicle->m_type}}</th>
                                 <th>{{$vechicle->m_cost}}</th>
                                    
                                  
                                        <td>{{ $vechicle['updated_at']->diffForHumans() }}</td>

                                       <td>
                                       <div class="d-flex order-actions">	
                                       <a href="{{ route('services.edit',$vechicle->id)}}" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>
                                        
                                        	
                                        <form id="delete-form-{{ $vechicle->id }}" action="{{ route('users.destroy',$vechicle->id) }}" method="POST"  >
                                                                                      @csrf
                                                                                      @method('DELETE')
                                                                              <a href="javascript:;" onclick="deleteVechicle({{ $vechicle->id }})" class="text-danger bg-light-danger border-0">
                                                                          
                                                                          <button type="submit" class='bx bxs-trash'></button></a>
                                                                          
                                                                                  </form>
                                      

                                 
                                </div>
                                       </td>
                                   </tr>
                                   @endif
                                @endforeach
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