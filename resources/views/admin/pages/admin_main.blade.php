@extends('admin.layout.layout')
@section('content')
	<div class="main" id="main">
		<div class="main_body">
			<div class="title">Главная</div>
			<form action="{{route('admin_main_post')}}" method="post"  enctype="multipart/form-data" class="main_video_form">
				{{ csrf_field() }}
				<div class="main_itme">
					<div class="main_itme_title">видео на главной</div>
					<input type="file" name="main_video" class="main_file_input">
					<div class="main_video">
						<video class="main_video_media" controls id="myVideo">
				          	<source src="{{asset(env('THEME'))}}/site/video/{{$main->main_video}}" type="video/mp4">
				        </video>
				        <input type="hidden" name="old_video_main" value="{{$main->main_video}}">	
					</div>
				</div>

				<div class="main_itme">
					<div class="main_itme_title">фото на главной для мобильной версии</div>
					<input type="file" name="main_img" class="main_file_input">
					<div class="main_img">
						<img src="{{asset(env('THEME'))}}/site/img/{{$main->main_img}}" alt="">	
						 <input type="hidden" name="old_image_main" value="{{$main->main_img}}">
					</div>
				</div>

			
				<button type="submit" name="header" class="btn">изменить</button>
			</form>			
		</div>
	</div>
	<div class="last_news" id="last_news">
		<div class="last_news_body">
			<div class="title">Последняя новость</div>
			<form action="{{route('admin_main_post')}}" method="post"  enctype="multipart/form-data" class="last_news_form">
{{ csrf_field() }}

				<div class="main_itme">
					<div class="main_itme_title">текст новости</div>
					<textarea rows="10" cols="110" name="work_text" class="main_text_textarea">{{$work->work_text}}</textarea>
				</div>

				<div class="main_itme">
					<div class="main_itme_title">youtube ссылка</div>
					<input type="text" name="work_video" class="main_text_input" value="{{$work->work_video}}">
					<div class="news_video">
						<div class="news_video_body" data-vid="{{$work->work_video}}">
							<iframe  width="560" height="315" data-src_vid="{{$work->work_video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
						</div>
					</div>
					</div>
					<button type="submit" name="news" class="btn">изменить</button>
			</form>	
		</div>
	</div>


	<div class="price_calc" id="price_calc">
		<div class="price_calc_body">
			<div class="title">Колькулятор цен</div>
		
	<form action="{{route('admin_main_post')}}" method="post"  enctype="multipart/form-data" class="price_calc_form">

{{ csrf_field() }}
		<div class="price_calc_main_itme">
			<div class="main_itme_title">одна минута</div>
			<input type="text" name="minut" class="price_calc_input" value="{{$value->minut}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Ujecia z drona</div>
			<input type="text" name="ujecia_z_drona" class="price_calc_input" value="{{$value->ujecia_z_drona}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">FPV dron</div>
			<input type="text" name="fpv" class="price_calc_input" value="{{$value->fpv}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Film reklamowy lub promocyjny</div>
			<input type="text" name="reclama" class="price_calc_input" value="{{$value->reclama}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Teledysk</div>
			<input type="text" name="teledysk" class="price_calc_input" value="{{$value->teledysk}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Art clip</div>
			<input type="text" name="art_clip" class="price_calc_input" value="{{$value->art_clip}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Proste ciecie</div>
			<input type="text" name="ciecie" class="price_calc_input" value="{{$value->ciecie}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Złożona wielowarstwowa edycja z prostą grafiką i korekcja kolorów, podstawowe tytuły</div>
			<input type="text" name="zlozona" class="price_calc_input" value="{{$value->zlozona}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Wybór odpowiedniej kompozycji do wideo w Internecie</div>
			<input type="text" name="wibor" class="price_calc_input" value="{{$value->wibor}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Muzyka do komercyjnego wykorzystania na licencji</div>
			<input type="text" name="licencji" class="price_calc_input" value="{{$value->licencji}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Lektor</div>
			<input type="text" name="lektor" class="price_calc_input" value="{{$value->lektor}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Chromakey</div>
			<input type="text" name="chrom" class="price_calc_input" value="{{$value->chrom}}">	
		</div>

		<div class="price_calc_main_itme">
			<div class="main_itme_title">Promowanie filmu w internecie</div>
			<input type="text" name="promout" class="price_calc_input" value="{{$value->promout}}">	
		</div>

				<button type="submit" name="price" class="btn">изменить</button>
			</form>	
		</div>
	</div>


	<div class="about"  id="about">
		<div class="about_body">
			<div class="title">О себе</div>
					<form action="{{route('admin_main_post')}}" method="post"  enctype="multipart/form-data" class="about_form">

				{{ csrf_field() }}

					<div class="main_itme">
					<div class="main_itme_title">заголовок o себе</div>
					<input type="text" name="about_title" class="main_text_input" value="Zdjecia i filmy z drona i czasem z ziemi">
					</div>

				<div class="main_itme">
					<div class="main_itme_title">текст o себе</div>
					<textarea rows="10" cols="110" name="description" class="main_text_textarea">{{$info->description}}</textarea>
				</div>

				<div class="main_itme">
					<div class="main_itme_title">фото себя любимого</div>
					<input type="file" name="main_foto_about" class="main_file_input">
					<div class="main_img about_foto ibg">
						<img src="{{asset(env('THEME'))}}/site/img/about/{{$info->main_foto_about}}" alt="">
						 <input type="hidden" name="old_foto_about" value="{{$info->main_foto_about}}">	
					</div>
				</div>

				<div class="main_itme">
					<div class="main_itme_title">Email</div>
					<input type="text" name="email" class="main_text_input" value="{{$info->email}}">
				</div>

				<div class="main_itme">
					<div class="main_itme_title">telefon</div>
					<input type="text" name="tel" class="main_text_input" value="{{$info->tel}}">
				</div>

				<div class="main_itme">
					<div class="main_itme_title">Facebook</div>
					<input type="text" name="face" class="main_text_input" value="{{$info->face}}">
				</div>

				<button type="submit" name="aboute_info" class="btn">изменить</button>
			</form>	
		</div>
	</div>
@endsection 