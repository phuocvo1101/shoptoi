@extends('admin.master')
@section('controller','Sản Phẩm')
@section('action','Sửa')
@section('content')
<style type="text/css">
    .img_current { width: 150px;}
    .imgDetail { width: 170px;}
    .icon_del {position: relative;top:-40px;left: -20px;}
    #insert {margin-top: 20px;}
</style>
<form action="" method="POST" name="frmEditProduct" enctype="multipart/form-data">
<div class="col-lg-10" style="padding-bottom:120px">
    @include('admin.blocks.errors')
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="sltParent">
                <option value="">Vui lòng chọn danh mục</option>
                <?php cate_parent($cate,0,"--",$product['cate_id']) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Tên Sản Phẩm</label>
            <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{!! old('txtName'), isset($product['name'])? $product['name']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Size: </label> </br>
            <input  type="radio" name="size" @if ($product['size'] == 1) checked="checked" @endif value="1" /> Size Quần</br>
            <input  type="radio" name="size" @if ($product['size'] == 4) checked="checked" @endif value="4" /> Size Quần Đại</br>
            <input type="radio" name="size" @if ($product['size'] == 2) checked="checked" @endif value="2"/> Size Áo </br>
            <input type="radio" name="size" @if ($product['size'] == 5) checked="checked" @endif value="5"/> Size Áo Đại </br>
            <input type="radio" name="size" @if ($product['size'] == 3) checked="checked" @endif value="3"/> Free size </br>
        </div>
        <div class="form-group">
            <label>Thông Tin: </label> </br>
            <input  type="checkbox" name="spmoi" @if ($product['spmoi'] == 1) checked="checked" @endif /> Sản Phẩm Mới </br>
            <input type="checkbox" name="spbanchay" @if ($product['spbanchay'] == 1) checked="checked" @endif /> Sản Phẩm Bán Chạy </br>
            <input type="checkbox" name="spkhuyenmai" @if ($product['spkhuyenmai'] == 1) checked="checked" @endif /> Sản Phẩm Nổi Bật </br>
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input class="form-control" name="txtPrice" placeholder="Please Enter Price" value="{!! old('txtPrice'), isset($product['price'])? $product['price']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Giới Thiệu</label>
            <textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro'), isset($product['intro'])? $product['intro']:null  !!}</textarea>
            <script type="text/javascript">ckeditor('txtIntro')</script>
        </div>
       <div class="form-group">
            <label>Nội Dung</label>
            <textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent'), isset($product['content'])? $product['content']:null !!}</textarea>
            <script type="text/javascript">ckeditor("txtContent")</script>
        </div>
        {{-- <div class="form-group">
            <label>Hình hiện tại </label>
            <img class="img_current" src="{{ asset('upload/'.$product['image']) }}"  />
            <input type="hidden" name="img_current" value="{{ $product['image'] }}"/>
        </div>
        <div class="form-group">
            <label>Hình Ảnh</label>
            <input type="file" name="fImages">
        </div> --}}
        <div class="form-group">
            <label>Từ Khóa</label>
            <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords'), isset($product['keywords'])? $product['keywords']:null  !!}" />
        </div>
        <div class="form-group">
            <label>Mô Tả</label>
            <textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription'), isset($product['description'])? $product['description']:null  !!}</textarea>
        </div>
        <div  class="form-group">
            <label>Hình chi tiết:</label>
            <div class="row">
                @foreach ($productDetail as $key=>$item)
                <div class="border_hinh col-md-3" id="product_{{ $key }}">
                    <div class="padding_hinh row">
                        <div><lable>Màu sp: {{$item['color']}} </lable>
                        </div>
                    </div>
                    <div class="padding_hinh row">
                        <div><lable>Mã sp: {{$item['masp']}} </lable>
                        </div>
                    </div>
                    <div class="padding_hinh row">
                        <img class="imgDetail" src="{{ asset('upload/'.$item['image']) }}" idHinh="{{$item['id']}}" id="{{ $key }}" />
                        <a href="javascript:void(0)" type="button" id="del_img_detail" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
                    </div>
                    
                </div>
                @endforeach
            </div>
            @include('admin.product.hinhchitiet')
        </div>
        <button type="submit" class="btn btn-default">Cập Nhật
</div>
 {{-- <div class="col-md-1"></div>
 <div class="col-md-3">
   @foreach ($productDetail as $key=>$item)
    <div class="form-group" id={{ $key }}>
        <img class="imgDetail" src="{{ asset('upload/'.$item['image']) }}" idHinh="{{$item['id']}}" id="{{ $key }}" />
        <a href="javascript:void(0)" type="button" id="del_img_detail" class="btn btn-danger btn-circle icon_del"><i class="fa fa-times"></i></a>
    </div>
    @endforeach
    <button type="button" class="btn btn-primary" id="addImages">Add Images Detail</button>
    <div id="insert"></div>
</div> --}}
</form>
@endsection