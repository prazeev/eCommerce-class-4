@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    View all categories
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                <table class="table table-responsive table-primary table-striped" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Slug</th>
                            <th>Keywords</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                    </head>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->status}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->keywords}}</td>
                            <td>{{date('m.d.Y',strtotime($category->created_at))}}</td>
                            <td>
                                    <div class="btn-group">
                                            <button type="submit" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                             <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{route('categories.edit',[$category->id])}}">Edit</a></li>
                                                    <li><a href="{{route('categories.show',[$category->id])}}">View</a></li>
                                                    <li class="divider"></li>
                                                    
                                            </ul>
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
</div>
    
@endsection