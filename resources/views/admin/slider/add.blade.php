@extends('admin.master')
@section('controller','Slider')
@section('action','Thêm')
@section('content')
<style type="text/css">
    #insert {margin-top: 20px;}
</style>
<form action="{!! url('admin/slider/add') !!}" method="POST" enctype="multipart/form-data">
<div class="col-lg-10" style="padding-bottom:120px">
@include('admin.blocks.errors')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Tên</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value ="{!! old('txtName') !!}" />
        </div>

         <div class="form-group">
            <label>Hình Ảnh</label>
            <input type="file" name="fImages" value ="{!! old('fImages') !!}">
        </div>
        <button type="submit" class="btn btn-default">Thêm</button>
</div>
<form>
@endsection
               