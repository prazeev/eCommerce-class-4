@extends('adminlte::page')
@section('title','Create Categories');
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-title">
                    {{__('Create Categories')}}
                </div>
            </div>
            <div class="box-body">
                <form action="{{route('categories.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name*</label>
                      <input type="text" name="name" id="name" class="form-control" placeholder="Enter category name" >
                     
                    </div>
                    <div class="form-group">
                            <label for="name"> Description*</label>
                            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Description of category" required="required"></textarea>
                        </div>
                    <div class="checkbox">
                        <label for="status" ><b>Status</b></label>
                        <input type="radio" name="status" value="1" checked="checked":null>Active
                        <input type="radio" name="status" value="0" checked="checked":null>In-active
                    </div>
                    <div class="form-group">
                        <label for="slug">Slug*</label>
                        <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter Slug">
                    </div>
                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <input type="text" name="keywords" id="keywords" class="form-control" placeholder="Enter keyowrds">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md  pull-right">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection