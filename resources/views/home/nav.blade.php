<div class="container hidden-sm hidden-xs">
    <div class="row">
        <div class="col-sm-12 col-md-2">
            <a href="/"><img style="width: 154px; height: 71px" src="{{ asset('res.yame.vn/Content/images/logo.jpg') }}" alt="Yame.vn" /></a>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="searchbox">
                <form class="form-inline" method="GET" action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" name="keyword" id="" placeholder="Tìm kiếm sản phẩm">
                    </div>
                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                </form>
                
            </div>
        </div>
        <div class="col-sm-12 col-md-6 header-rightbox">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    
                </div>
                <div class="col-sm-6 col-md-3">
                    
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="boxed-content left-aligned" data-toggle="tooltip" data-placement="bottom" title='Miễn phí giao hàng toàn quốc cho Đơn hàng từ 500.000đ (nội thành HCM) - 1.000.000đ (ngoại thành HCM)' data-html="true">
                        <span class="icon icon-truck"></span>
                        <h2 class="boxed-content-title">Giao hàng <br/> Toàn quốc</h2>                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="boxed-content left-aligned" data-toggle="tooltip" data-placement="bottom" title='Tổng đài chăm sóc và Hỗ trợ Khách hàng  Thứ 2 - 7: hoạt động từ 8:30 - 20:00 Chủ nhật: hoạt động từ 8:30 - 17:00' data-html="true">
                        <span class="icon icon-phone"></span>
                        <h2 class="boxed-content-title">Đặt hàng <br/>0888 771077</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="navbar navbar-default" role="navigation">
    <div class="container stickyDiv">
        <div class="navbar-header">
            <a href="{!! URL::route('giohang') !!}" class="navbar-toggle">
                <span class="icon fa fa-shopping-cart" style="color: #ff0000; font-size: 14px;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                <span style="color: #FFF; font-size: 12px;" id="cartInfo">{{Cart::count()}} SP</span> {{-- can sua --}}
            </a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="float: left !important;">
                <span class="sr-only">Danh mục</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand visible-sm visible-xs" href="javascript:;" data-toggle="collapse" data-target=".navbar-collapse">Danh mục</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{!! URL::route('sanphammoi') !!}">MỚI VỀ</a></li>
                <li><a href="{!! URL::route('sanphambanchay') !!}">BÁN CHẠY</a></li>
                <?php
                    $menu_level_1 = DB::table('cates')->where('parent_id',0)->get();
                ?>
                @foreach($menu_level_1 as $item_level_1)
                <?php
                    $menu_level_2 = DB::table('cates')->where('parent_id',$item_level_1->id)->get();
                ?>

                <li>
                    <a href="{!! URL::route('loaisanpham',[$item_level_1->id,$item_level_1->alias]) !!}" class="dropdown-toggle">{!! $item_level_1->name !!} @if (!empty($menu_level_2))<b class="caret"></b> @endif </a>

                   @if (!empty($menu_level_2))
                    <ul class="dropdown-menu">
                        @foreach($menu_level_2 as $item_level_2)
                        <?php
                            $menu_level_3 = DB::table('cates')->where('parent_id',$item_level_2->id)->get();
                        ?>
                        <li class="dropdown">
                            <a href="{!! URL::route('loaisanpham',[$item_level_2->id,$item_level_2->alias]) !!}">{!! $item_level_2->name !!} @if (!empty($menu_level_3))<span class="caret" title="0"></span>@endif</a>
                            @if (!empty($menu_level_3))
                            <ul class="dropdown-menu"> 
                            @foreach($menu_level_3 as $item_level_3)  
                                <li><a href="{!! URL::route('loaisanpham',[$item_level_3->id,$item_level_3->alias]) !!}">{!! $item_level_3->name !!}</a></li>
                            @endforeach
                            </ul>
                            @endif
                        </li>
                       @endforeach
                    </ul>
                    @endif

                </li>
                @endforeach
                <li><a href="{!! URL::route('tintuc') !!}">TIN TỨC</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="right">
                    <a href="{!! URL::route('giohang') !!}" style="font-size: 20px;">
                        <span class="icon fa fa-shopping-cart" style="color: #ff0000;"></span>
                        <span style="color: #FFF; font-size: 12px;" id="cartInfo2">{{Cart::count()}} SP</span>
                    </a>
                </li>
            </ul>

        </div><!--/.nav-collapse -->
    </div>
</div>