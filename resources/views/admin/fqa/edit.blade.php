@extends('admin.master')
@section('controller','FQA')
@section('action','Thêm')
@section('content')
<style type="text/css">
    #insert {margin-top: 20px;}
</style>
<form action="" method="POST" enctype="multipart/form-data">
<div class="col-lg-10" style="padding-bottom:120px">
@include('admin.blocks.errors')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Tên</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value ="{!! old('txtName'), isset($fqa['title'])? $fqa['title']:null  !!}" />
        </div>

        <div class="form-group">
            <label>Nội Dung</label>
            <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent'), isset($fqa['content'])? $fqa['content']:null !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent")</script>
        </div>
        <button type="submit" class="btn btn-default">Cập Nhật</button>
</div>
<form>
@endsection
               