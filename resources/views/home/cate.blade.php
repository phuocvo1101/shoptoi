@extends('home.master1')

@section('title', 'Loại sản phẩm')

@section('content')

<div class="container body-content">
        
    {{-- link chi tiet --}}
	<div class="row">
	    <div class="col-sm-12">
	        <div class="row breadcrumb-wrapper">
	            <div class="col-sm-7 col-md-7 col-xs-12">
	                <ol class="breadcrumb">
	                    <li><a href="/"><i class="icon fa fa-home"></i> {{$title_home}}</a></li>
	                    <li class="active">{{$loai}}</li>
	                </ol>
	            </div>
	            <div class="col-md-5 col-sm-5 col-xs-12 text-right">
	                <div class="listProductSort">
	                    <span class="active"><a href="{!! URL::route('sanphamnoibat') !!}">Nổi bật</a></span>
	                    <span>/</span>
	                    <span class=""><a href="{!! URL::route('sanphambanchay') !!}">Bán chạy</a></span>
	                    <span>/</span>
	                    <span class=""><a href="{!! URL::route('sanphammoi') !!}">Mới nhất</a></span>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	{{-- end link chi tiet --}}

	{{-- phan trang --}}
	@if ( $cate_products->lastPage() > 1 )
		<div class="row"></div>
		<div class="row">
			<div class="col-md-12 text-right">
				<div class="pagination-container">
					@include('home.pagination.default', ['paginator' => $cate_products, 'link_limit' => 5])
				</div>
			</div>
		</div>
	@endif
	{{-- end phan trang --}}

	{{-- san pham --}}
	<div class="row">
		@foreach($cate_products as $product)
		<?php
            $product_parent = DB::table('products')->where('id',$product->parent_id)->first();
        ?>
		
		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem" style="min-height: 375px;">
		        <a href="{!! URL::route('detailProduct', [$product->id,$product_parent->alias,$product->alias]) !!}">
		            <img class="img-responsive" src="{{ asset('upload/'.$product->image) }}" style="min-height: 339px;" width="255" height="356" alt="{{ $product_parent->name}}" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="{!! URL::route('detailProduct', [$product->id,$product_parent->alias,$product->alias]) !!}">{!!$product_parent->name !!}</a> / {!!$product->id !!}
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
	{{-- end san pham --}}

	@if ( $cate_products->lastPage() > 1 )
	<div class="row"></div>
	<div class="row">
		<div class="col-md-12 text-right">
			<div class="pagination-container">
				@include('home.pagination.default', ['paginator' => $cate_products, 'link_limit' => 5])
			</div>
		</div>
	</div>
	@endif

</div>
@endsection