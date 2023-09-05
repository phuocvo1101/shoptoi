<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<title>Phuoc Vo - @yield('title')</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		#wapper {width:980px; height: auto; margin: 0 auto}
		#header {width: auto; height: 200px; background-color: red;}
		#content {width: auto; height: 500px; background-color: blue}
		#footer {width: auto; height: 100px; background-color: green}
	</style>
</head>
<body>
	<div id="wapper">
	@include('views.marquee',['mar_content'=>'khoa hoc lap trinh laravel'])
		<div id="header">
			@section('sidebar')
			Day la menu

			@show
		</div>
		<div id="content">
			@yield('noidung')
		</div>
		<div id="footer"></div>
	</div>
	
</body>
</html>