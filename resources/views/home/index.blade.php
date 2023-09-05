@extends('home.master')

@section('title', 'Trang chủ')


<!-- {{$variable1}}
{{$infors['name']}} -->
    <!-- Slider  homeslide-->
    
    <!-- End Slider homeslide-->

<!-- Informaster -->
@section('infomaster')
    <div class="infomaster">
        <div class="hotline">
            <h2>{{$infors['mobile']}}</h2> Hỗ trợ 24/7
        </div>
        <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>{{$infors['name']}}</h2>
    </div>
@endsection
<!-- End informaster -->

@section('right-content')
    <!-- Right content -->
                <div class="col-dl-9 right-content">
                    <div class="wrapper">
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe khuyến mãi<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>
                        <!-- Product Xe khuyen mai-->
                        <div class="content">
                        @if($promotion_product)
                            @foreach ($promotion_product as $item)
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="{!! URL::route('detailProduct', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="E200 Edition E"></a>
                                    </div>
                                    <h4><a href="{!! URL::route('detailProduct', $item->id) !!}">{!! $item->name !!}</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">{!! number_format($item->price,0,',','.') !!} VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                            <div class="clearfix"></div>
                        </div>
                        <!-- End product xe khuyen mai -->
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe nhập khẩu<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>

                        <!-- Xe nhap khau -->
                        <div class="content">
                         @if($import_product)
                            @foreach ($import_product as $item)
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="{!! URL::route('detailProduct', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="GLE400 4Matic"></a>
                                    </div>
                                    <h4><a href="{!! URL::route('detailProduct', $item->id) !!}">{!! $item->name !!}</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">{!! number_format($item->price,0,',','.') !!} VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                            <div class="clearfix"></div>
                        </div>
                        <!-- End xe nhap khau -->
                        <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Xe đã qua sử dụng<img src="./home/images/icon-3.png" alt="danh muc"></span></h3>
                        <div class="clearfix"></div>
                        <!-- Xe cu -->
                        <div class="content">
                         @if($old_product)
                            @foreach ($old_product as $item)
                            <div class="product">
                                <div class="products">
                                    <div class="product_img">
                                        <a href="{!! URL::route('detailProduct', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="E400 AMG 2013"></a>
                                    </div>
                                    <h4><a href="{!! URL::route('detailProduct', $item->id) !!}">{!! $item->name !!}</a></h4>
                                    <div class="product_price"><span class="spleft"></span><span class="spcenter">{!! number_format($item->price,0,',','.') !!} VNĐ</span><span class="spleft spright"></span></div>
                                </div>
                            </div>
                             @endforeach
                        @endif
                            <div class="clearfix"></div>
                        </div>
                        <!-- End xe cu -->
                    </div>
                </div>
                <!-- End right content -->
@endsection
