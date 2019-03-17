@extends('adminlte::page')
@section('title','View Vendors')
@section('content')
@include('flash::message')
<div class="row">
    <div class="row">
       <div class="col-md-8">
           <div class="box">
               <div class="box-header with-border">
                   <div class="box-title">
                       <h3>{{__("List of Vendors")}}</h3>
                       
                   </div>
                   <div class="box-body">
                       <p>{{$vendor->description}}</p>
                       <table class="table-primary table table table-bordered">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Name</th>
                                   <th>Address</th>
                                   <th>email</th>
                                   <th>phone</th>
                                    <th>color</th>
                                    <th>Created_at</th>
                                    <th>Action</th>
                               </tr>
                            </thead>    
                            <tbody>
                             
                              <tr>
                                    <td>{{$vendor->id}}</td>
                                    <td>{{$vendor->name}}</td>
                                    <td>{{$vendor->address}}</td>
                                    <td>{{$vendor->phone}}</td>
                                    <td>{{$vendor->email}}</td>
                                    <td>{{$vendor->color}}</td>
                                    <td>{{date('M,d,Y',strtotime($vendor->created_at))}}</td>
                                    <td><a href="{{route('vendors.edit',[$vendor->id])}}" class="btn btn-primary btn-sm pull-right">Edit</a></td>
                                </tr>
                            
                         
                            </tbody>
                       </table>
                       
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
    
@endsection
