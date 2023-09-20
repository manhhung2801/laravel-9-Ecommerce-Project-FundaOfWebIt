@extends('layouts.admin')
@section('contend')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <h6 class="alert alert-success">{{session('message')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Category
                        <a href="{{ url('admin/category/create')}}" class="btn btn-primary btn-sm float-end">Add Category</a>
                    </h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div> 
@endsection