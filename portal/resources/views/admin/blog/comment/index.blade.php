@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col">
        <div class="card radius-10 mb-0">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Recent Blog Comments </h5>
                    </div>
                </div>

               <div class="table-responsive mt-3">
                   <table class="table align-middle mb-0">
                       <thead class="table-light">
                           <tr>
                            <th>S/N</th>
                               <th>Blog Title</th>
                               <th>Name</th>
                               <th>Comment</th>
                                 <th>Date</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($comments as $comment)
                   <tr>
                       <th>{{$comment->id}}</th>
                       <th>{{$comment->blog->title}}</th>
                       <th>{{$comment->name}}</th>
                       <th>{{$comment->text}}</th>
                        <th>{{$comment->created_at->toFormattedDateString()}}</th>
                       <td>
                        <div class="d-flex order-actions">
                        {{-- <a href="" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a> --}}
                       <form id="delete-form" action="{{ route('deleteComment', $comment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class='bx bxs-trash' style="margin-right:-9px">Delete</button></a>
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
