 @extends('home.master')

@section('title', 'Sản phẩm')

<!-- Informaster -->
@section('infomaster')
    <div class="infomaster">
        <div class="hotline">
            <h2>0909 222 022</h2> Hỗ trợ 24/7
        </div>
        <h2 class="supporth"><span>Trưởng nhóm bán hàng</span><br>Nguyễn Văn Quý</h2>
    </div>
@endsection
<!-- End informaster -->

@section('right-content')
    <!-- Right content -->
	<div class="col-dl-9 right-content">
	    <div class="wrapper">
	        <h3 class="titlel row-title"><span>{{ $loai }}<img src="{{ asset('home/images/icon-3.png') }}" alt="danh muc"></span></h3>
	        <div class="clearfix"></div>
	        <div class="content">
	        	@if($cate_products)
	        		@foreach($cate_products as $item)
		            <div class="product">
		                <div class="products">
		                    <div class="product_img">
		                        <a href="{!! URL::route('detailProduct', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="{{ $item->name}}"></a>
		                    </div>
		                    <h4><a href="{!! URL::route('detailProduct', $item->id) !!}">{{ $item->name }}</a></h4>
		                    <div class="product_price"><span class="spleft"></span><span class="spcenter">{!! number_format($item->price,0,',','.') !!} VNĐ</span><span class="spleft spright"></span></div>
		                </div>
		            </div>
	            	@endforeach
	            @endif
	            <div class="clearfix"></div>
	            @if ( $cate_products->lastPage() > 1 )
	            <div class="pagination" align="right">
	            	@if($cate_products->currentPage() != 1)
	            		<a href="{!! $cate_products->url($cate_products->currentPage() - 1) !!}">Prev</a>
	            	@endif
	            	@for ($i=1; $i <= $cate_products->lastPage() ; $i++)
	            		@if($cate_products->currentPage() == $i)
	            		 <span>{!!$i!!}</span>
	            		@else
	            			<a href="{!! $cate_products->url($i) !!}">{!!$i!!}</a>
	            		@endif
	                @endfor
	                @if($cate_products->currentPage() != $cate_products->lastPage())
	                	<a href="{!! $cate_products->url($cate_products->currentPage() +1)  !!}">Next</a>
	                @endif
	            </div>
	            @endif
	            <!--pagination-->
	        </div>
	    </div>
	</div>
    <!-- End right content -->
@endsection



@extends('home.master1')

@section('title', 'Loại sản phẩm')

@section('content')

<div class="container body-content">
        
	<div class="row">
	    <div class="col-sm-12">
	        <div class="row breadcrumb-wrapper">
	            <div class="col-sm-7 col-md-7 col-xs-12">
	                <ol class="breadcrumb">
	                    <li><a href="../index.html"><i class="icon fa fa-home"></i> YaMe</a></li>
	                    <li class="active">&#193;o Thun</li>
	                </ol>
	            </div>
	            <div class="col-md-5 col-sm-5 col-xs-12 text-right">
	                <div class="listProductSort">
	                    <span class="active"><a href="ao-thun73bb.html?s=1">Nổi bật</a></span>
	                    <span>/</span>
	                    <span class=""><a href="ao-thun23b5.html?s=2">Bán chạy</a></span>
	                    <span>/</span>
	                    <span class=""><a href="ao-thuna9d0.html?s=11">Mới nhất</a></span>                    
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-12 text-right">
	        <div class="pagination-container"><ul class="pagination"><li><a href="ao-thun364f.html?page=1&amp;s=1">1</a></li><li class="active"><a>2</a></li><li><a href="ao-thun4174.html?page=3&amp;s=1">3</a></li><li><a href="ao-thunb778.html?page=4&amp;s=1">4</a></li><li><a href="ao-thundca4.html?page=5&amp;s=1">5</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToLast"><a href="ao-thunf03c.html?page=47&amp;s=1">»»</a></li></ul></div>
	    </div>
	</div>

	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem">
		        <a href="ao-thun/ao-thun-nam-kirimaru-basic-dw03-00168763ce2.html?c=V%c3%a0ng%20Ngh%e1%bb%87">            
		                        <img class="img-responsive" src="../../cdn3.yame.vn/pimg/ao-thun-nam-kirimaru-basic-dw03-0016876/e61baff0-0c75-2900-49ef-0014b5f9400dcc6a.jpg?w=540&amp;h=756&amp;c=true&amp;ntf=false" alt="&#193;o Thun Nam KiriMaru Basic DW03" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="ao-thun/ao-thun-nam-kirimaru-basic-dw03-00168763ce2.html?c=V%c3%a0ng%20Ngh%e1%bb%87">&#193;o Thun Nam </a> / 0016876
		                </p>
		            </div>
		            <div class="col-xs-12  col-sm-4 text-right">
		                    <p class="price">
		                         99,000
		                    </p>
		            </div>
		        </div>        
		    </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem">
		        <a href="ao-thun/ao-thun-nam-kirimaru-basic-aa08-0015289f6a5.html?c=Xanh%20%c4%90en">            
		                        <img class="img-responsive" src="../../cdn3.yame.vn/pimg/ao-thun-nam-kirimaru-basic-aa08-0015289/303b88ae-cf56-3300-8557-00140b90d689cc6a.jpg?w=540&amp;h=756&amp;c=true&amp;ntf=false" alt="&#193;o Thun Nam KiriMaru Basic AA08" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="ao-thun/ao-thun-nam-kirimaru-basic-aa08-0015289f6a5.html?c=Xanh%20%c4%90en">&#193;o Thun Nam </a> / 0015289
		                </p>
		            </div>
		            <div class="col-xs-12  col-sm-4 text-right">
		                    <p class="price">
		                         99,000
		                    </p>
		            </div>
		        </div>        
		    </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem">
		        <a href="ao-thun/ao-thun-u-kirimaru-basic-e02-0016644ee3d.html?c=%c4%90%e1%bb%8f%20T%c6%b0%c6%a1i">            
		                        <img class="img-responsive" src="../../cdn2.yame.vn/pimg/ao-thun-u-kirimaru-basic-e02-0016644/1ffe7098-071c-0100-381b-001494eb7a19cc6a.jpg?w=540&amp;h=756&amp;c=true&amp;ntf=false" alt="&#193;o Thun U KiriMaru Basic E02" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="ao-thun/ao-thun-u-kirimaru-basic-e02-0016644ee3d.html?c=%c4%90%e1%bb%8f%20T%c6%b0%c6%a1i">&#193;o Thun U Ki</a> / 0016644
		                </p>
		            </div>
		            <div class="col-xs-12  col-sm-4 text-right">
		                    <p class="price">
		                         79,000
		                    </p>
		            </div>
		        </div>        
		    </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem">
		        <a href="ao-thun/ao-thun-nam-kirimaru-3-lo-k01-0016885ada8.html?c=Tr%e1%ba%afng">            
		                        <img class="img-responsive" src="../../cdn3.yame.vn/pimg/ao-thun-nam-kirimaru-3-lo-k01-0016885/0f7f1c19-4424-1f00-a84d-0014bb679711cc6a.jpg?w=540&amp;h=756&amp;c=true&amp;ntf=false" alt="&#193;o Thun Nam KiriMaru 3 Lỗ K01" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="ao-thun/ao-thun-nam-kirimaru-3-lo-k01-0016885ada8.html?c=Tr%e1%ba%afng">&#193;o Thun Nam </a> / 0016885
		                </p>
		            </div>
		            <div class="col-xs-12  col-sm-4 text-right">
		                    <p class="price">
		                         79,000
		                    </p>
		            </div>
		        </div>        
		    </div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem">
		        <a href="ao-thun/ao-thun-nam-kirimaru-basic-aa10-00166862eef.html?c=Tr%e1%ba%afng%20Lam">            
		                        <img class="img-responsive" src="../../cdn3.yame.vn/pimg/ao-thun-nam-kirimaru-basic-aa10-0016686/0affe5d6-4f1a-4400-9628-0014a572cd1dcc6a.jpg?w=540&amp;h=756&amp;c=true&amp;ntf=false" alt="&#193;o Thun Nam KiriMaru Basic AA10" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="ao-thun/ao-thun-nam-kirimaru-basic-aa10-00166862eef.html?c=Tr%e1%ba%afng%20Lam">&#193;o Thun Nam </a> / 0016686
		                </p>
		            </div>
		            <div class="col-xs-12  col-sm-4 text-right">
		                    <p class="price">
		                         79,000
		                    </p>
		            </div>
		        </div>        
		    </div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem">
		        <a href="ao-thun/ao-thun-u-kirimaru-basic-g04-0016700ada8.html?c=Tr%e1%ba%afng">            
		                        <img class="img-responsive" src="../../cdn3.yame.vn/pimg/ao-thun-u-kirimaru-basic-g04-0016700/e5e88564-d014-2d00-5dd7-0014a24c8812cc6a.jpg?w=540&amp;h=756&amp;c=true&amp;ntf=false" alt="&#193;o Thun U KiriMaru Basic G04" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="ao-thun/ao-thun-u-kirimaru-basic-g04-0016700ada8.html?c=Tr%e1%ba%afng">&#193;o Thun U Ki</a> / 0016700
		                </p>
		            </div>
		            <div class="col-xs-12  col-sm-4 text-right">
		                    <p class="price">
		                         79,000
		                    </p>
		            </div>
		        </div>        
		    </div>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem">
		        <a href="ao-thun/ao-thun-nam-no-style-basic-td-a04-0016341489f.html?c=X%c3%a1m%20Tr%e1%ba%afng">            
		                        <img class="img-responsive" src="../../cdn3.yame.vn/pimg/ao-thun-nam-no-style-basic-td-a04-0016341/c521fc05-bcc8-3500-bdc3-00144723b443cc6a.jpg?w=540&amp;h=756&amp;c=true&amp;ntf=false" alt="&#193;o Thun Nam No Style Basic TD A04" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="ao-thun/ao-thun-nam-no-style-basic-td-a04-0016341489f.html?c=X%c3%a1m%20Tr%e1%ba%afng">&#193;o Thun Nam </a> / 0016341
		                </p>
		            </div>
		            <div class="col-xs-12  col-sm-4 text-right">
		                    <p class="price">
		                         255,000
		                    </p>
		            </div>
		        </div>        
		    </div>
		</div>

		<div class="col-xs-6 col-sm-3 col-md-3">
		    <div class="pitem">
		        <a href="ao-thun/ao-thun-nam-ma-bu-basic-tn-e75-0017127b82e.html?c=N%c3%a2u">            
		                        <img class="img-responsive" src="../../cdn3.yame.vn/pimg/ao-thun-nam-ma-bu-basic-tn-e75-0017127/82559419-437f-cb00-43a3-0014b61cef20cc6a.jpg?w=540&amp;h=756&amp;c=true&amp;ntf=false" alt="&#193;o Thun Nam Ma Bư Basic TN E75" />
		        </a>        
		        <div class="row">
		            <div class="col-xs-12 col-sm-8">
		                <p class="characteristics">
		                    <a href="ao-thun/ao-thun-nam-ma-bu-basic-tn-e75-0017127b82e.html?c=N%c3%a2u">&#193;o Thun Nam </a> / 0017127
		                </p>
		            </div>
		            <div class="col-xs-12  col-sm-4 text-right">
		                    <p class="price">
		                         165,000
		                    </p>
		            </div>
		        </div>        
		    </div>
		</div>

	<div class="row"></div>
	<div class="row">
	    <div class="col-md-12 text-right">
	        <div class="pagination-container"><ul class="pagination"><li><a href="ao-thun364f.html?page=1&amp;s=1">1</a></li><li class="active"><a>2</a></li><li><a href="ao-thun4174.html?page=3&amp;s=1">3</a></li><li><a href="ao-thunb778.html?page=4&amp;s=1">4</a></li><li><a href="ao-thundca4.html?page=5&amp;s=1">5</a></li><li class="disabled PagedList-ellipses"><a>&#8230;</a></li><li class="PagedList-skipToLast"><a href="ao-thunf03c.html?page=47&amp;s=1">»»</a></li></ul></div>
	    </div>
	</div>
</div>
@endsection