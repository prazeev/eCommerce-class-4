@extends('adminlte::page')
@section('title','Edit category')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__("Edit Category")}}:{{$category->name}}
                </div>
            </div>
            <div class="box-body">
                <form action="{{route('categories.update',[$category->id])}}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name*</label>
                        <input type="text" name="name" id="name" placeholder="Enter name of brand" class="form-control" value="{{$category->name}}" required="required"> 
                    </div>
                    <div class="form-group">
                            <label for="name">Description*</label>
                            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Description of category" required="required" value="{{$category->description}}"></textarea>
                        </div>
                        <div class="checkbox">
                                <strong>Status</strong><br>
                                <input type="radio" name="status" value="1"{{$category->status? "checked='checked'":null}}> Active 
                                <input type="radio" name="status" value="0"{{!$category->status? "checked='checked'":null}}>In Active
                        </div>
                        <div class="form-group">
                                <label for="name">Slug*</label>
                                <input type="text" name="slug" id="slug" placeholder="Enter slug of category" class="form-control" value="{{$category->slug}}" required="required"> 
                        </div>
                        <div class="form-group">
                                <label for="name">Keywords*</label>
                                <input type="text" name="keyowrds" id="keywords" placeholder="Enter keyowrds of category" class="form-control" value="{{$category->keywords}}" required="required"> 
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
    
