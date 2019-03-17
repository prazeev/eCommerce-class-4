@extends('adminlte::page')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    View all Brands
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
                            <th>Keywords</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                    </head>
                    <tbody>
                        @foreach ($brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->description}}</td>
                            <td>{{$brand->status}}</td>
                            <td>{{$brand->keywords}}</td>
                            <td>{{date('m.d.Y',strtotime($brand->created_at))}}</td>
                            <td>
                                    <div class="btn-group">
                                            <button type="submit" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                             <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{route('brands.edit',[$brand->id])}}">Edit</a></li>
                                                    <li><a href="{{route('brands.show',[$brand->id])}}">View</a></li>
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