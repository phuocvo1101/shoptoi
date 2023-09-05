@extends('home.master1')

@section('title', 'Chi tiết sản phẩm')

@section('content')


<div class="container body-content">
        
    <div class="row">
        <div class="col-sm-12">
            <div class="row breadcrumb-wrapper">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="/"><i class="icon fa fa-home"></i> {{$title_home}}</a></li>
                        <li class="active">Thông chi giỏ hàng của bạn</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="row" style="color:#fff;">
        @if(Cart::count() > 0)
        <div style="margin: 15px">@include('admin.blocks.errors')</div>
        
        <form id="datHang" name="datHang" action="{!! url('dat-hang') !!}" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            @include('home.cart.customer')
            @include('home.cart.chitietgiohang')
        {{-- </form> --}}
        @else
            <h3 style="text-align: center">GIỎ HÀNG TRỐNG</h3>
        @endif
        
    </div>




    </div>
    @endsection