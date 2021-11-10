<div class="main">

	<div class="main_video">
		<video class="main_video_media" autoplay muted loop id="myVideo">
          	<source src="{{asset(env('THEME'))}}/site/video/{{$main->main_video}}" type="video/mp4">
        </video>	
	</div>
	<div class="main_img ibg">
		<img src="{{asset(env('THEME'))}}/site/img/{{$main->main_img}}" alt="qwe">
	</div>
	<div class="main_content">



		<div class="main_drone_img"><img src="{{asset(env('THEME'))}}/site/img/drone.png" alt=""></div>
		<div class="main_content_body">
			<h1 class="rightnow_title">ZAMÓW USŁUGI JUŻ TERAZ!</h1>
			<a href="#messaging" class="rightnow_btn _slow_scroll">Zamów</a>

			<div class="arrow_down_body">
			<div class="arrow-down">
			    <span></span>
			    <span></span>
			    <span></span>
			</div>
			</div>
		</div>

	</div>
</div>

<div class="news">
	<div class="news_body">
		<div class="news_title">last work</div>
		<div class="news_info">
			<div class="news_info_text">
				<!-- <div class="news_info_title">MOJA PODRÓŻ DO FILMOWANIA DRONÓW FPV</div> -->
				<div class="news_info_text_text">
					<p>
						{{$work->work_text}}
					</p>
				</div>
			</div>
			<div class="news_video">
			<div class="news_video_body" data-vid="{{$work->work_video}}">
				<iframe  width="560" height="315" data-src_vid="{{$work->work_video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
			</div>
			</div>
		</div>
	</div>
</div>


<div class="kontakt" id="kontakt">
	<div class="kontakt_body" id="cennik">


			



		<div class="form">
		<form action="{{route('contact')}}" method="post" enctype="multipart/form-data" id="form" class="form_body" >

 			{{csrf_field()}}
			
				
		<div class="kontakt_title" id="messaging">
			<div class="kontakt_title_title">WYSŁAĆ WIADOMOŚĆ​</div>
			<div class="kontakt_title_text">Jeżeli masz jakieś pytania lub chcesz skorzystać z moich usług zadzwoń do mnie, wyślij e-mail lub napisz posługując się poniższym formularzem​</div>
		</div>	
			
			<div class="form_item">
				<label for="formName" class="form_lable">Imię*</label>
				<input type="text" id="formName" name="name"  placeholder="Wpisz swoje imię" class="form_input _req _text">
			</div>
			<div class="form_item">
				<label for="formEmail" class="form_lable">Email*</label>
				<input type="text" id="formEmail" name="email"  placeholder="Wpisz swój Email"  class="form_input _req _email">
			</div>
			<div class="form_item">
				<label for="formMassege" class="form_lable">Wiadomosc</label>
				<textarea name="message" id="formMassege" class="form_input"></textarea>			
			</div>
			<div style="margin: 0 0 20px 0;" class="g-recaptcha" data-sitekey="6LdWWRgdAAAAAIFyliZdWSGPYHOQyiEU5fJVgUj4"></div>
			<div class="message" id="message"></div>
			<button type="submit" class="form_button">Wyśli</button>
		</form>
		</div>
	</div>
</div>



<section class="fullsreen fullsreen_bg"></section>







<div class="about" id="about">
	<div class="about_body">
		<div class="about_info">
			<div class="about_title">Zdjecia i filmy z drona i czasem z ziemi</div>
			<div class="about_text">{{$info->description}}</div>
		</div>
		<div class="about_foto ibg"><img src="{{asset(env('THEME'))}}/site/img/about/{{$info->main_foto_about}}" alt=""></div>
		<div class="about_contact">
			<div class="about_contact_title">SKONTAKTUJ SIĘ Z NAMI</div>
				<div class="about_contact_items">
					<div class="about_contact_item"><a href="mailto:sonderlingmeister@gmail.com">Email: <span>{{$info->email}}</span></a></div>	
					<div class="about_contact_item"><a href="tel:+48787939909">Telefon: <span>{{$info->tel}}</span></a></div>	
					<div class="about_contact_item"><a href="https://www.facebook.com/YavorskyiVG/"  target="_blank">Facebook: <span>Yavorskyi Video Grill</span></a></div>	
				</div>
		</div>
	</div>
</div>