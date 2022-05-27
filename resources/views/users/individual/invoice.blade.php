@extends('layouts.individual')

@section('content')

<div class="row">
    <div class="col">
        <div class="card radius-10 mb-0">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Invoice</h5>
                    </div>
                   
                </div>
               <div class="table-responsive mt-3">
                   <table class="table align-middle mb-0">
                       <thead class="table-light">
                     
                           <tr>
                               <th>#</th>
                               <th>invoice File</th>
                               <th>Description</th>
            
                                

                                 <th>Date</th>
                             
                           </tr>
                          
                       </thead>
                       <tbody>
                   
                           <tr>
                               
                                 @foreach($notes as $key=> $note)
                                 @if($note->invoice)

                               @if(Auth::user()->id == $note->user_id)
                        
                               <th>{{ $key + 1}}</th>
                               <!-- <th> <a href="{{route('individual.download.invoice')}}"><button type="submit">Download File</button></a></th> -->
                               <th> <a href="{{ URL::asset('storage/uploads/'.$note->invoice) }}" download><button type="submit">Download File</button></a></th>
                               <th>{{ $note->description}}</th>
                               <th>{{ $note['updated_at']->diffForHumans() }}</th>

                           
                               @endif
                               @endif
                               @endforeach
                              

                       
                              
                           </tr>
                   
                       </tbody>
                   </table>
               </div>
            </div>
        </div>
    </div>
</div><!--end row-->

@endsection
