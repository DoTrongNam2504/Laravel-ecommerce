@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Add product </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('products') }}"> List product</a></li>
                </ol>
            </nav>
        </div>


        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <form class="form-sample" method="POST" action="{{ url('insert-product') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Product Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" placeholder="Enter product name...">
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
                                        <label class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="price" class="form-control" placeholder="Enter product price ...">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Seller price</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="seller_price" placeholder="Enter seller price...." class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="qty" type="number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tax</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="number" placeholder="Enter tax...." name="tax">
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
                                        <label class="col-sm-3 col-form-label">Trending</label>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="trending"
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
                                        <label class="col-sm-3 col-form-label">Category id</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <select class="form-control" name ="category_id">
                                                    <option value="">Select category</option>
                                                    @foreach ($categoryAdmin as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                  
                                                </select>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Content</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="content" rows="4"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-3">
                                
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Image product </label>
                                        <div class="col-sm-9">
                                            <div class="input-group col-xs-12">
                                                <input type="file" name="image" class="form-control"
                                                    placeholder="Upload Image" >
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
