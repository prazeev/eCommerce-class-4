@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('Show all Categories')}}
                </div>
                <div class="box-body">
                    <table class="table-primary table table table-bordered">
                        <thead>
                            <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Slug</th>
                                    <th>Keywords</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                             </tr>
                        </thead>  
                         <tbody>
                         @foreach ($categories as $category)
                            <tr>
                                 <td>{{$category->id}}</td>
                                 <td>{{$category->name}}</td>
                                 <td>{{$category->description}}</td>
                                 <td>{{$category->status}}</td>
                                <td>{{$category->slug}}</td>
                                 <td>{{$category->keywords}}</td>
                                 <td>{{$category->created_at}}</td>
                                <td><a href="{{route('categories.edit',[$category->id])}}" class="btn btn-primary btn-sm pull-right">Edit</a></td>
                                         

                             </tr>
                                         
                         @endforeach
                         </tbody>
                </div>

            </div>
        </div>

    </div>
</div>
    
@endsection