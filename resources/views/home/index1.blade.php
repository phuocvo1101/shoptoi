@extends('home.master1')

@section('title', 'Trang chủ')

@section('content')

<div class="container body-content">

@include('home.slider')

<br />

    <div class="row">
        <h4 style="margin-left: 15px; color: #fff;">Sản Phẩm Mới</h4>
        @foreach($spMoi as $spm)
            <?php
            $product_parent = DB::table('products')->where('id',$spm->parent_id)->first();
            ?>

            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="pitem" style="min-height: 375px;">
                    <a href="{!! URL::route('detailProduct', [$spm->id,$product_parent->alias,$spm->alias]) !!}">
                        <img class="img-responsive" src="{{ asset('upload/'.$spm->image) }}" style="min-height: 339px;" width="255" height="356" alt="{{ $product_parent->name}}" />
                    </a>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <p class="characteristics">
                                <a href="{!! URL::route('detailProduct', [$spm->id,$product_parent->alias,$spm->alias]) !!}">{!!$product_parent->name !!}</a> / {!!$spm->id !!}
                            </p>
                        </div>
                        <div class="col-xs-12  col-sm-4 text-right">
                            <p class="price">
                                {!! number_format($product_parent->price,0,',','.') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <h4 style="margin-left: 15px; color: #fff;">Sản Phẩm Bán Chạy</h4>
        @foreach($spBanChay as $spm)
            <?php
            $product_parent = DB::table('products')->where('id',$spm->parent_id)->first();
            ?>

            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="pitem" style="min-height: 375px;">
                    <a href="{!! URL::route('detailProduct', [$spm->id,$product_parent->alias,$spm->alias]) !!}">
                        <img class="img-responsive" src="{{ asset('upload/'.$spm->image) }}" style="min-height: 339px;" width="255" height="356" alt="{{ $product_parent->name}}" />
                    </a>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <p class="characteristics">
                                <a href="{!! URL::route('detailProduct', [$spm->id,$product_parent->alias,$spm->alias]) !!}">{!!$product_parent->name !!}</a> / {!!$spm->id !!}
                            </p>
                        </div>
                        <div class="col-xs-12  col-sm-4 text-right">
                            <p class="price">
                                {!! number_format($product_parent->price,0,',','.') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection