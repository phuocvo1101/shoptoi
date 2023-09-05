@extends('admin.master')
@section('controller','Tin Tức')
@section('action','Thêm')
@section('content')
<style type="text/css">
    #insert {margin-top: 20px;}
</style>
<form action="{!! url('admin/news/add') !!}" method="POST" enctype="multipart/form-data">
<div class="col-lg-10" style="padding-bottom:120px">
@include('admin.blocks.errors')
  
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Tiêu đề</label>
            <input class="form-control" name="txtName" placeholder="Vui lòng nhập tiêu đề" value ="{!! old('txtName') !!}" />
        </div>
        <div class="form-group">
            <label>Giới Thiệu</label>
            {{--<input class="form-control" name="txtIntro" placeholder="Vui lòng nhập" value ="{!! old('txtIntro') !!}" />--}}
            <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro') !!}</textarea>
            <script type="text/javascript">ckeditor("txtIntro")</script>
        </div>
         <div class="form-group">
            <label>Nội Dung :</label>
            <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent') !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent")</script>
        </div>
        <div class="form-group">
            <label>Hình Ảnh</label>
            <input type="file" name="fImages" value ="{!! old('fImages') !!}">
        </div>
        <div class="form-group">
            <label>Từ Khóa</label>
            <input class="form-control" name="txtKeywords"  value ="{!! old('txtKeywords') !!}"/>
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea class="form-control" rows="3" name="txtDescription" value ="{!! old('txtDescription') !!}"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Thêm</button>
</div>
<form>
@endsection
               