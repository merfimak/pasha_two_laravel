<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="description" content="Drone Photography and Video">
	<meta name="keywords" content="zdjecia, video, film, Drone, kamerzysta, Photography, filmowanie, wesela, fpv, jaworski, yavorskyi, yaworski" />
	<title></title>
	<link rel="stylesheet" href="{{asset(env('THEME'))}}/site/css/mail_style.css">
</head>
<body>
<div class="wrapper" id="wrapper">


<h1 class="h" style="color: #86C232;
  font-size: 44px;
 background-color: #A60000;">test1</h1>
<strong>Name:</strong> {{ $data['name'] }}<br>
<strong>E-mail:</strong> {{ $data['email'] }}<br><br>
<strong>Сообщение:</strong> {!! nl2br($data['message']) !!}




</div>
	<script src="{{asset(env('THEME'))}}/site/js/swiper-bundle.min.js"></script>
	<script src="{{asset(env('THEME'))}}/site/js/script.js"></script>
</body>
</html>