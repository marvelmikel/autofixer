@extends('layouts.admin')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Blog</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Post Blog/News</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <div class="row">
        <form class="row g-3 needs-validation" novalidate  action="{{url('/postblog')}}" method="POST"
         enctype="multipart/form-data">
    @csrf
    </div>
    <!--end row-->
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <h6 class="mb-0 text-uppercase"></h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <label for="validationCustom01" class="form-label" style="color: black; font-style:bold">Blog Title</label>
                    <input type="text" class="form-control" id="validationCustom01" name="title" id="title" placeholder="Blog Tilte ">
                    <div class="valid-feedback">Looks good!</div>
                </div>

                    <div class="card-body">

                        <label for="validationCustom04" class="form-label" style="color: black; font-style:bold">Blog Image</label>
                        <input id="image-uploadify" name="image" id="image" type="file" accept="" multiple>
                </div>
                <div class="card-body">
                        <label for="validationCustom01" class="form-label" style="color: black; font-style:bold">Blog Description</label>
                        <textarea type="text" class="form-control" id="validationCustom01" name="content" id="content" placeholder="Blog Post"></textarea>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <br/>

                <div align="center">
                        <button style="width: 300px;" class="btn btn-primary" type="submit" s>Post</button>
                    </div>
                    <br>
                    <br>
            </div>
        </div>
    </div>
    </form>
    <!--end row-->
</div>


<div class="row">
    <div class="col">
        <div class="card radius-10 mb-0">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <h5 class="mb-1">Recent Blog Post </h5>
                    </div>
                </div>

               <div class="table-responsive mt-3">
                   <table class="table align-middle mb-0">
                       <thead class="table-light">
                           <tr>
                            <th>S/N</th>
                               <th>Blog Title</th>
                               <th>Blog Posted</th>
                               <th>Blog Image</th>
                               <th>Blog Content</th>
                                 <th>Date</th>
                               <th>Actions</th>
                           </tr>
                       </thead>
                       <tbody>
                        @foreach($blogs as $blog)
                   <tr>
                       <th>{{$blog->id}}</th>
                       <th>{{$blog->title}}</th>
                       <th>{{$blog->author}}</th>
                       <td><img src="{{ asset('blog_images/' . $blog->image) }}" alt="{{ $blog->image }}"
                         style="width: 100px; height:100px; border-radius: 50%;object-fit: cover"></td>
                       <th>{{$blog->content}}</th>
                        <th>{{$blog->created_at->toFormattedDateString()}}</th>
                       <td>
                        <div class="d-flex order-actions">
                        <a href="{{ url('edit-blog/'.$blog->id)}}" class="ms-4 text-primary bg-light-primary border-0"><i class='bx bxs-edit' ></i></a>

                        <form  action="{{route('deleteBlog', $blog->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                <button type="submit" class='bx bxs-trash' style="margin-left: -10;"></button>

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

<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->

@endsection
