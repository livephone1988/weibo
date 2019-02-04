<!DOCTYPE html>
<html>
<head>
	<title>@yield('title' ,'Weibo App') - 100个小时做一个微博网站</title>
	<link rel="stylesheet"  href="{{ mix('css/app.css')}}">
</head>
<body>
	@include('layouts._header')
	
		<div class="container">
			<div class="offset-md-1 col-md-10">
				@include('shared._messages')
				@yield('content')
				@include('layouts._footer')
			</div>		
		</div>		
</body>
</html>
