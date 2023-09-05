@extends('home.master1')

@section('title', 'Chi tiết sản phẩm')

@section('content')

<div class="container body-content">
    {{--breadcrumb--}}
    <div class="row">
        <div class="col-sm-12">
            <div class="row breadcrumb-wrapper">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="icon fa fa-home"></i>{{$title_home}}</a></li>
                        <li><a href="{!! URL::route('loaisanpham',[$cate->id,$cate->alias]) !!}">{{$cate->name}}</a></li>
                        <li class="active">{{$productParent->name}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{--end breadcrumb--}}

    <div class="row product-info">
        <div class="col-md-4">
            <img class="img-responsive" src="{{ asset('upload/'.$product->image) }}" alt="{{$productParent->name}}" />
        </div>
        <div class="col-md-8">
            <div class="ditem">
                <div class="row">
                    <div class="@if(!empty($productParent->intro)) col-md-8 @else col-md-12 @endif">
                        <h4>{{$productParent->name}}</h4>
                        <h5 class="price">đ {!! number_format($productParent->price,0,',','.') !!}</h5>
                        <table class="table table-condensed">
                            @foreach($size_product as $item)
                            <tr>
                                <td>{{$product->color}}, {{$item}}</td>
                                 <form action="{!! url('mua-hang') !!}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <td class="text-right">
                                        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                                        <input type="hidden" name="router_chi_tiet"  value="{!! URL::route('detailProduct', [$product->id,$productParent->alias,$product->alias]) !!}" />
                                        <button type="submit" name="themGioHang" ><i class="fa fa-plus-circle" data-toggle="tooltip" title="Thêm Đỏ, M vào giỏ hàng"></i> Thêm vào giỏ</button>
                                       {{--  <a href="javascript:void(0);" class="addVariantToCartabc"><i class="fa fa-plus-circle" data-toggle="tooltip" title="Thêm Đỏ, M vào giỏ hàng"></i> Thêm vào giỏ</a> --}}
                                </td>
                                <td class="text-right">
                                    {{-- <form action="{!! url('mua-hang') !!}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
                                        <input type="hidden"  name="product_id" value="{{$product->id}}" />
                                        <input type="hidden" name="product_name" value="{{$productParent->name}}" />
                                        <input type="hidden" name="product_size" value="{{$item}}" />
                                        <input type="hidden"  name="product_color" value="{{$product->color}}" />
                                        <input type="hidden"  name="product_price" value="{{$productParent->price}}" />
                                        <input type="hidden"  name="product_image" value="{{$product->image}}" />
                                        <button type="submit" name="datHang" class="button btn-xs btn-danger">Mua ngay</button>
                                    {{-- </form> --}}
                                </td>
                            </form>

                            </tr>
                            @endforeach
                        </table>
                    </div>
                    @if(!empty($productParent->intro))
                    <div class="col-md-4">
                        <h5>Mô tả sản phẩm</h5>
                        {!! $productParent->intro !!}
                    </div>
                    @endif

                </div>

                <hr />
                <div>
                    <div class="row">
                        @if(!empty($relatedProducts))
                            @foreach($relatedProducts as $item_image)
                            <div class="col-xs-4 col-sm-3">
                                <div class="vitem">
                                    <a href="{!! URL::route('detailProduct', [$item_image->id,$productParent->alias,$item_image->alias]) !!}">
                                        <img class="img-responsive" style="width: 100px !important; height: 140px !important;" src="{{ asset('upload/'.$item_image->image) }}"/>
                                    </a>
                                    <p>{{$item_image->color}}</p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 text-center">
            <hr />
            <div class="detailImageItem js-blogContent">
            {!! $productParent->content !!}
            </div>
        </div>
    </div>
</div>

@endsection
