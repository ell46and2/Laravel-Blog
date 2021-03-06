<!doctype html>
<html lang="en">
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}" type="text/css">
		@yield('styles')
	</head>
	<body>
		@include('includes.header')
		<div class="main">
			@yield('content')
		</div>
		@include('includes.footer')
	</body>
</html>