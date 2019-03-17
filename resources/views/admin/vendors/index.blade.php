@extends('adminlte::page')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        View all vendors
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-primary table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Address</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vendors as $vendor)
                                <tr>
                                    <td>{{$vendor->id}}</td>
                                    <td>{{$vendor->name}}</td>
                                    <td>{{$vendor->description}}</td>
                                    <td>{{$vendor->address}}</td>
                                <td>{{date("j'", strtotime($vendor->created_at))}}<sup>{{date('S ', strtotime($vendor->created_at))}}</sup>{{date("F, Y", strtotime($vendor->created_at))}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Action</button>
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              <span class="caret"></span>
                                              <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{route('vendors.edit',[$vendor->id])}}">Edit</a></li>
                                                <li><a href="{{route('vendors.show',[$vendor->id])}}">View</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$vendors->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection