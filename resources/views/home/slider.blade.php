{{-- <section class="slider">
        <div class="container">
            <div class="homeslide">
                <div class="flexslider">
                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1170px, 0px, 0px);">
                            <li class="clone" aria-hidden="true" style="width: 1170px; float: left; display: block;"><img src="{{ asset('home/images/slider/slider1.jpg')}}" alt="slide" draggable="false"></li>
                            <li class="flex-active-slide.jpg" style="width: 1170px; float: left; display: block;"><img src="{{ asset('home/images/slider/slider2.jpg')}}" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src="{{ asset('home/images/slider/slider3.jpg')}}" alt="slide" draggable="false"></li>
                            <li style="width: 1170px; float: left; display: block;" class=""><img src="{{ asset('home/images/slider/slider4.jpg')}}" alt="slide" draggable="false"></li>                            
                        </ul>
                    </div>
                    <ol class="flex-control-nav flex-control-paging">
                        <li><a class="flex-active">1</a></li>
                        <li><a class="">2</a></li>
                        <li><a class="">3</a></li>
                    </ol>
                    <ul class="flex-direction-nav">
                        <li><a class="flex-prev" href="#">Previous</a></li>
                        <li><a class="flex-next" href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}



<div class="row">
    <div class="col-sm-12">
        <div class="Wallop Wallop--slide">
                <div class="Wallop-list">
                    @foreach($slider as $sl)
                        <div class="Wallop-item">
                            <img  src="{{ asset('upload/'.$sl->img) }}" class="img-responsive" alt="wc2018" />
                        </div>
                    @endforeach
                </div>
                <a href="#" class="Wallop-buttonPrevious">
                    <i class="fa fa-chevron-circle-left"></i>
                </a>
                <a class="Wallop-buttonNext" href="#">
                    <i class="fa fa-chevron-circle-right"></i>
                </a>
        </div>
    </div>
</div>