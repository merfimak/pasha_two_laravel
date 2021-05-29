<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Drone Photography and Video">
	<meta name="keywords" content="zdjecia, video, film, Drone, kamerzysta, Photography, filmowanie, wesela, fpv, jaworski, yavorskyi, yaworski" />
	<title>{{$title}}</title>
		<link rel="stylesheet" href="{{asset(env('THEME'))}}/site/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="{{asset(env('THEME'))}}/site/css/style.min.css">
</head>
<body>
<div class="wrapper" id="wrapper">



@yield('navigation')
@yield('content')
@yield('footer')







</div>
	<script src="{{asset(env('THEME'))}}/site/js/swiper-bundle.min.js"></script>
	<script src="{{asset(env('THEME'))}}/site/js/script.js"></script>
</body>
</html>