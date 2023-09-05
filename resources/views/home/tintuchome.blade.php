 <div class="row-data">
                <h3 class="titlel row-title"><span style="cursor:pointer" onclick="">Tin tức - Sự kiện<img src="{{ asset('home/images/icon-3.png')  }}" alt="danh muc"></span></h3>
                <div class="clearfix"></div>
                <div class="home-news">
                 @if($news)
                    @foreach ($news as $item)
                    <div class="news-content clearfix">
                        <div class="news-images">
                            <a href="{!! URL::route('chitiettintuc', $item->id) !!}"><img src="{{ asset('upload/'.$item->image) }}" alt="{!!  $item->name !!}"></a>
                        </div>
                        <h5><a href="{!! URL::route('chitiettintuc', $item->id) !!}" title="{!!  $item->name !!}">{!!  $item->name !!}</a></h5>
                        <div class="clearfix"></div>
                    </div>
                    @endforeach
                @endif
                    <div class="clearfix"></div>
                </div>
            </div>