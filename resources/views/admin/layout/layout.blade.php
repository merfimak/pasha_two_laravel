<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>FPV DRON AERIAL CINEMATIC</title>
	<link rel="stylesheet" href="{{asset(env('THEME'))}}/admin/css/style.css">
</head>
<body>
<div class="wrapper" id="wrapper">



<div class="menu" id="menu">
	<div class="menu_body">
		<div class="admin_logo">админ</div>
				@if(session('success'))
					<div class="success" id="success">{{session('success')}}</div> 
				@endif
			<nav class="menu__nav">
				<ul class="menu__list">										
					<li><a href="{{ route('main') }}" class="menu__link">на сайт</a></li>
					<li><a  class="menu__link" href="{{ route('logout') }}"
   							 onclick="event.preventDefault();
				             document.getElementById('logout-form').submit();">
				   			 выйти</a>						
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						    {{ csrf_field() }}
						</form>
					</li>
				</ul>
			</nav>
	</div>	
</div>			


<div class="sitebar">
	
		<ul class="sitebar_nav">
			<li><a href="{{ route('admin_main') }}#main" class="sitebar_link _slow_scroll active">главная</a></li>
			<li><a href="{{ route('admin_main') }}#last_news" class="sitebar_link _slow_scroll">новость</a></li>			
			<li><a href="{{ route('admin_main') }}#price_calc" class="sitebar_link _slow_scroll">цены</a></li>
			<li><a href="{{ route('admin_main') }}#about" class="sitebar_link _slow_scroll">про меня</a></li>
			<li><a href="{{ route('video.index')}}" class="sitebar_link">видео</a></li>
			<li><a href="{{ route('foto.index')}}" class="sitebar_link">фото</a></li>
		</ul>
</div>
	
<div class="content_admin">



@yield('content') 


</div>
</div>
	<script src="{{asset(env('THEME'))}}/admin/js/script.js"></script>
</body>
</html>