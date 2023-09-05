@extends('home.master1')

@section('title', 'FQA')
@section('content')
	<div class="container body-content">

		<div class="row">
			<div class="col-sm-12">
				<div class="row breadcrumb-wrapper">
					<div class="col-sm-12">
						<ol class="breadcrumb">
							<li><a href="/"><i class="icon fa fa-home"></i> {{$title_home}}</a></li>
							<li class="active">{{$fqa->title}}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 col-sm-12 col-md-12">
				<h3 class="blogitem">{!! $fqa->title !!}</h3>
				<div class="js-blogContent">
					{!! $fqa->content !!}
				</div>
			</div>
		</div>

	</div>
@endsection