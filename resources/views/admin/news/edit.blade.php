@extends('admin.master')
@section('controller','Tin Tức')
@section('action','Cập nhật')
@section('content')
<style type="text/css">
    .img_current { width: 150px;}
</style>
<form action="" method="POST" name="frmEditNews" enctype="multipart/form-data">
<div class="col-lg-10" style="padding-bottom:120px">
    @include('admin.blocks.errors')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Tiêu đề</label>
            <input class="form-control" name="txtName" placeholder="Vui lòng nhập tiêu đề" value="{!! old('txtName'), isset($news['name'])? $news['name']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Giới Thiệu</label>
            {{--<input class="form-control" name="txtIntro" value ="{!! old('txtIntro'), isset($news['intro'])? $news['intro']:null  !!}" />--}}
            <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro'), isset($news['intro'])? $news['intro']:null  !!}</textarea>
            <script type="text/javascript">ckeditor('txtIntro')</script>
        </div>
       <div class="form-group">
            <label>Nội Dung</label>
            <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent'), isset($news['content'])? $news['content']:null !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent")</script>
        </div>
        <div class="form-group">
            <label>Hình hiện tại </label>
            <img class="img_current" src="{{ asset('upload/'.$news['image']) }}"  />
            <input type="hidden" name="img_current" value="{{ $news['image'] }}"/>
        </div>
        <div class="form-group">
            <label>Hình ảnh</label>
            <input type="file" name="fImages">
        </div>
        <div class="form-group">
            <label>Từ khóa</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords'), isset($news['keywords'])? $news['keywords']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription'), isset($news['description'])? $news['description']:null  !!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Cập Nhật</button>
</div>
</form>
@endsection