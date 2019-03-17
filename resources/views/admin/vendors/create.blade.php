@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.3/js/bootstrap-colorpicker.min.js"></script>
<script>
    $(function() {
        $(".colorpicker").colorpicker();
    })
    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
           
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-title">
                        {{__("Create new vendor")}}
                    </div>
                </div>
                <div class="box-body">
                    <form action="{{route('vendors.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name of vendor" required="required">
                        </div>
                        <div class="form-group">
                            <label for="name">Address *</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Enter address of vendor" required="required">
                        </div>
                        <div class="form-group">
                            <label for="name"> Description*</label>
                            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter Description of vendor" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phpne">phone *</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone of vendor" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Enter email of vendor" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email">Color* </label>
                            <div class="input-group colorpicker-component colorpicker">
                                <input value="#d43b3b" type="text" name="color" class="form-control" id="color" placeholder="Enter color of vendor">
                                <span class="input-group-addon"><i></i></span>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-md pull-right">Create</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection