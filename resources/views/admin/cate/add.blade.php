@extends('admin.master')
@section('controller','Danh Mục')
@section('action','Thêm')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.errors')
    <form action="{!! route('admin.cate.getAdd') !!}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Danh Mục Cha</label>
            <select class="form-control" name="sltParent">
                <option value="0">Vui lòng chọn Danh Mục</option>
                <?php cate_parent($parent); ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên Danh Mục</label>
            <input class="form-control" name="txtCateName" placeholder="Vui lòng nhập Danh Mục" />
        </div>
        <div class="form-group">
            <label>Danh Mục Order</label>
            <input class="form-control" name="txtOrder" placeholder="" />
        </div>
        <div class="form-group">
            <label>Từ Khóa</label>
            <input class="form-control" name="txtKeywords" placeholder="" />
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea class="form-control" rows="3" name="txtDescription"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Thêm</button>
    <form>
</div>
@endsection()
                