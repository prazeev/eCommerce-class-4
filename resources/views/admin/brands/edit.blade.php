@extends('adminlte::page')
@section('title','Edit Brand')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__("Edit Brand")}}:{{$brand->id}}
                </div>
            </div>
            <div class="box-body">
                <form action="{{route('brands.update',[$brand->name])}}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" name="name" id="name" placeholder="Enter name of brand" class="form-control" value="{{$brand->name}}" required="required"> 
                    </div>
                    <div class="form-group">
                            <label for="name">Description*</label>
                            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Description of brand" required="required" value="{{$brand->description}}"></textarea>
                        </div>
                        <div class="checkbox">
                                <strong>Status</strong><br>
                                <input type="radio" name="status" value="1"{{$brand->status? "checked='checked'":null}}> Active 
                                <input type="radio" name="status" value="0"{{!$brand->status? "checked='checked'":null}}>In Active
                        </div>
                       
                        <div class="form-group">
                                <label for="name">Keywords*</label>
                                <input type="text" name="keyowrds" id="keywords" placeholder="Enter keyowrds of brand" class="form-control" value="{{$brand->keywords}}" required="required"> 
                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-md pull-right">Update</button>
     
                             </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
    
