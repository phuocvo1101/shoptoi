@extends('home.master1')

@section('title', 'Đặt Hàng')

@section('content')

<div class="container body-content">
        
	<div class="row">
	    <div class="col-sm-12">
	        <div class="row breadcrumb-wrapper">
	            <div class="col-sm-12">
	                <ol class="breadcrumb">
	                    <li><a href="/"><i class="icon fa fa-home"></i> {{$title_home}}</a></li>
	                    <li class="active">Thông tin đặt hàng</li>
	                </ol>
	            </div>
	        </div>
	    </div>
	</div>


	<div class="row" style="color:#fff;">
	    <div class="col-sm-12 col-md-12">
	        <h4>Đặt hàng thành công.</h4>
	        <p>
	            Đơn hàng của bạn đã được ghi nhận. Bộ phận chăm sóc khách hàng sẽ liên hệ bạn trong <b>24h</b> để xác nhận đơn hàng.
	        </p>
	        <div>
	            <img class="img-responsive" src="{{ asset('upload/dathang/dathang.jpg') }}">
	        </div>
	    </div>
	</div>
</div>
@endsection