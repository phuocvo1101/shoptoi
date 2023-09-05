@extends('admin.master')
@section('controller','Sản Phẩm')
@section('action','Thêm')
@section('content')
<style type="text/css">
    #insert {margin-top: 20px;}
</style>
<form action="{!! url('admin/product/add') !!}" method="POST" enctype="multipart/form-data">
<div class="col-lg-10" style="padding-bottom:120px">
@include('admin.blocks.errors')
  
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="sltParent">
                <option value="">Vui lòng chọn danh mục</option>
                <?php cate_parent($cate,0,"--",old('sltParent')) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên Sản Phẩm</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value ="{!! old('txtName') !!}" />
        </div>
        <div class="form-group">
            <label>Size: </label> </br>
            <input  type="radio" name="size" value="1" /> Size Quần</br>
            <input  type="radio" name="size" value="4" /> Size Quần Đại</br>
            <input type="radio" name="size" value="2"/> Size Áo </br>
            <input type="radio" name="size" value="5"/> Size Áo Đại </br>
            <input type="radio" name="size" value="3"/> Free size </br>
        </div>
        <div class="form-group">
            <label>Thông Tin: </label> </br>
            <input  type="checkbox" name="spmoi" /> Sản Phẩm Mới </br>
            <input type="checkbox" name="spbanchay"/> Sản Phẩm Bán Chạy </br>
            <input type="checkbox" name="spkhuyenmai"/> Sản Phẩm Nổi Bật </br>
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input class="form-control" name="txtPrice" placeholder="Please Enter Price" value ="{!! old('txtPrice') !!}"/>
        </div>
        <div class="form-group">
            <label>Giới Thiệu</label>
            <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro') !!}</textarea>
            <script type="text/javascript">ckeditor("txtIntro")</script>
        </div>
        <div class="form-group">
            <label>Nội Dung</label>
            <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent') !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent")</script>
        </div>
        {{-- <div class="form-group">
            <label>Hình Ảnh</label>
            <input type="file" name="fImages" value ="{!! old('fImages') !!}">
        </div> --}}
        <div class="form-group">
            <label>Từ Khóa</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value ="{!! old('txtKeywords') !!}"/>
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea class="form-control" rows="3" name="txtDescription" value ="{!! old('txtDescription') !!}"></textarea>
        </div>
        <div  class="form-group">
            <label>Hình chi tiết:</label>
            @include('admin.product.hinhchitiet')
        </div>
        <button type="submit" class="btn btn-default">Thêm</button>
</div>
{{-- <div class="col-md-1"></div>
<div class="col-md-3">
    <button type="button" class="btn btn-primary" id="addImages">Hình Chi Tiết</button>
    <div id="insert"></div>

</div> --}}
<form>
@endsection
               