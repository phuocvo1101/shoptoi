@extends('home.master1')

@section('title', 'Tin Tức')

@section('content')

	<div class="container body-content">

		@include('home.slider')

		<br />

		<div class="row">
			<div class="col-sm-12 col-md-12">
				<ul class="timeline">
					@if($news)
						@foreach($news as $item)

					<li class="event">
						<div class="news-item-box">
							<h5><a href="{!! URL::route('chitiettintuc', [$item->id]) !!}">{{$item->name}}</a></h5>
							<a href="{!! URL::route('chitiettintuc', [$item->id]) !!}">
								<img class="img-responsive"  src="{{ asset('upload/'.$item->image) }}" alt="" />
							</a>
							<p>{!! $item->intro  !!}</p>
						</div>
					</li>
						@endforeach
					@endif
				</ul>
				{{--<div class="text-center">--}}
					{{--<a href="javascript:;" id="loadNews" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i> Xem thêm nhiều tin khác</a>--}}
				{{--</div>--}}
			</div>
		</div>
	</div>

@endsection
