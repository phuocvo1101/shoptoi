
@extends('admin.master')
@section('controller','Category')
@section('action','Edit')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.errors')
    <form action="" method="POST">
     <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Danh Mục Cha</label>
            <select class="form-control" name="sltParent">
                <option value="0">Vui lòng chọn danh mục</option>
                 <?php cate_parent($parent, 0,"--",$data['parent_id']) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên Danh Mục</label>
            <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName',isset($data) ? $data['name'] : null) !!}" />
        </div>
        <div class="form-group">
            <label>Danh Mục Order</label>
            <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{!! old('txtOrder',isset($data) ? $data['order'] : null) !!}"/>
        </div>
        <div class="form-group">
            <label>Từ Khóa</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords',isset($data) ? $data['keywords'] : null) !!}"/>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription',isset($data) ? $data['description'] : null) !!}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Cập Nhật</button>
    <form>
</div>
@endsection
               