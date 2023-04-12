@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Add Category </h3>
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
                        <form class="form-sample" method="POST" action="{{ url('insert-category') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" placeholder="Enter category name...">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Meta Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="meta_title" placeholder="Enter meta title...." class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Slug</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="slug" >
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Meta Keyword</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" placeholder="Enter meta keyword...." name="meta_keywords">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" rows="4"> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Meta Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="meta_description" rows="4"> </textarea>
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
                                                    <input type="checkbox" class="form-check-input" name="status" > Yes <i
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
                                                    <input type="checkbox" class="form-check-input" name="popular"
                                                         > Yes <i
                                                        class="input-helper"></i></label>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>


                            </div>


                            <div class="row mt-3">
                                {{-- <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Parent Category </label>
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                                <option>Category1</option>
                                                <option>Category2</option>
                                                <option>Category3</option>
                                                <option>Category4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Image Category </label>
                                        <div class="col-sm-9">
                                            <div class="input-group col-xs-12">
                                                <input type="file" name="image" class="form-control file-upload-info"
                                                    placeholder="Upload Image" >
                                                {{-- <label class="file-upload-browse btn btn-primary" for="btn-image-upload">Upload</label> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-dark">Cancel</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
