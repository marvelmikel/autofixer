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
        <form class="row g-3 needs-validation" novalidate  action="{{url('edit-blog', $findBlog->id)}}" method="POST"
         enctype="multipart/form-data">
         @method('PUT')
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
                    <input type="text" class="form-control" id="validationCustom01" name="title" id="title" value="{{$findBlog->title}}">
                    <div class="valid-feedback">Looks good!</div>
                </div>

                    <div class="card-body">

                        <label for="validationCustom04" class="form-label" style="color: black; font-style:bold">Blog Image</label>
                        <img src="{{ asset('blog_images/' . $findBlog->image) }}" alt="{{$findBlog->image }}"
                         style="width: 100px; height:100px; border-radius: 50%;object-fit: cover">
                         <br>
                         <br>
                        <input id="image-uploadify" name="image" id="image" type="file" accept="" multiple>
                </div>
                <div class="card-body">
                        <label for="validationCustom01" class="form-label" style="color: black; font-style:bold">Blog Description</label>
                        <input type="text" class="form-control" id="validationCustom01" style="width:42em; height:20em"
                        name="content" id="content" value="{{$findBlog->content}}">

                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <br/>

                <div align="center">
                        <button style="width: 300px;" class="btn btn-primary" type="submit" >Update Post</button>
                    </div>
                    <br>
                    <br>
            </div>
        </div>
    </div>
    </form>
    <!--end row-->
</div>

<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->

@endsection
