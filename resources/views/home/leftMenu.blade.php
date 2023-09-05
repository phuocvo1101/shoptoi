<div class="col-dl-3 left-content">
                    <h3 class="titlel"><span>Các dòng xe<img src="{!! asset('home/images/icon-3.png')!!}" alt="danh muc"></span></h3>
                    <!-- Main menu -->
                    <?php  $menu_level_1 = DB::table('cates')->select('id','name','alias','parent_id')->where('parent_id', 0)->get(); ?>
                    <ul class="mainmenu">
                        @foreach($menu_level_1 as $item1)
                            <li><a href="{!! URL::route('loaisanpham', $item1->id) !!}">{{ $item1->name }}</a>
                                <ul>
                                    <?php $product = DB::table('products')->select('id','name','alias')->where('cate_id', $item1->id)->get(); ?>
                                    @foreach ($product as $item2)
                                    <li><a href="{!! URL::route('detailProduct', $item2->id) !!}">{{ $item2->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach  
                    </ul>
                    <!-- End main menu -->
                </div>