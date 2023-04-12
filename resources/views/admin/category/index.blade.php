@extends('layouts.admin')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Category Tables </h3>
            <nav aria-label="breadcrumb">
                <a href="{{ url('add-category') }}" class="btn btn-info btn-lg btn-block">
                    <i class="mdi mdi-plus-circle" style="position: relative; top:1px"></i>
                    Add category
                </a>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Category Name </th>
                                        <th> Image </th>
                                        <th> Status </th>
                                        <th> Popular </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($categoryAdmin as $row)
                                        <tr class="table-info">
                                            <td> {{ $row->id }} </td>
                                            <td> {{ $row->name }} </td>
                                            
                                            <td> <img src="{{ asset('upload/category').'/' . $row->image }}" alt="">
                                            </td>
                                            <td> {{ $row->status }} </td>
                                            <td> {{ $row->popular }}</td>

                                            <td>

                                                <button type="button" class="btn btn-dark btn-icon-text"> Edit <i
                                                        class="mdi mdi-table-edit btn-icon-append"></i>
                                                </button>

                                                <button type="button" class="btn btn-dark btn-icon-text"> Delete <i
                                                        class="mdi mdi-delete btn-icon-append"></i>
                                                </button>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
