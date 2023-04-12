@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title"> Edit Category </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('categories') }}"> List Category</a></li>
                </ol>
            </nav>
        </div>


        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample" method="POST" action="{{ url('update-category/'.$categoryAdmin->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" value="{{$categoryAdmin->name}}" placeholder="Enter category name...">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Meta Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="meta_title" value="{{$categoryAdmin->meta_title}}" placeholder="Enter meta title...." class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Slug</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="slug" value="{{$categoryAdmin->slug}}" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Meta Keyword</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" value="{{$categoryAdmin->meta_keywords}}" placeholder="Enter meta keyword...." name="meta_keywords">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" rows="4">{{$categoryAdmin->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Meta Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="meta_description" rows="4">{{$categoryAdmin->meta_description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-3">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" {{$categoryAdmin->status == "1" ? "checked" :""}} name="status" > Yes <i
                                                        class="input-helper"></i></label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Popular</label>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" {{$categoryAdmin->popular == "1" ? "checked" :""}}  name="popular"
                                                         > Yes <i
                                                        class="input-helper"></i></label>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>


                            </div>


                            <div class="row mt-3">
                                
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Image Category </label>
                                        <div class="col-sm-9">
                                            <div class="input-group col-xs-12">
                                                @if ($categoryAdmin->image)
                                                    <img src="{{asset('upload/category/'.$categoryAdmin->image)}}" alt="" class="fix-image-update" style="width:80px; height:80px">
                                                @endif
                                                <input type="file" name="image" class="form-control fix-choose-file-update"
                                                    placeholder="Upload Image" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a class="btn btn-dark" href="{{ url('categories')}}" >Cancel</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
