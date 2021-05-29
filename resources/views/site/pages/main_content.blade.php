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


			<div class="kontakt_calcTitle kontakt_title_title">KALKULATOR CENY</div>
			<div class="kontakt_calcText kontakt_title_text">Uwaga: Kalkulator jest narzędziem pomocniczym.
				Ostateczna cena może być inna w zaleznosci od potrzeb, wymagań i oczekiwań klienta.
				Oferuje wspolprace studjom filmowym, agencjom reklamowym.
				Piszcie, dzwońcie, na pewno się dogadamy!
			</div>

<!-- Cennik pakietów zdjeciowych oraz filmowych -->
			<div class="kontakt_cennik popup">Cennik
				<div class="sub_cennik">Cennik pakietów zdjeciowych oraz filmowych</div>
			</div>
			<div class="modal">
				<div class="modal_body">
					<div class="modal_body_title">Cennik pakietów zdjeciowych oraz filmowych:</div>
					<div class="modal_body_text">
						<div class="modal_body_item">
							<p class="modal_body_item_title">Pakiet dron DJI podstawowy 1:</p>
							<p>Cena 200 zł</p>
							<p>• Mavic 2 Pro</p>
							<p>• 1 lot — 25min</p>
							<p>Pakiet dron DJI podstawowy 1:</p>
							<p>• 4K Ultra HD 20MP (5464 x 3640 pikseli)</p>
							<p>Otrzymacie: 20 zdjęć lub 20 min filmu</p>	
						</div>

						<div class="modal_body_item">
							<p class="modal_body_item_title">Pakiet FPV Drone:</p>
							<p>Cena 200 zł:</p>
							<p>• Racer 5’/Cinewhooop 3’/Mini 2.5′</p>
							<p>• czas lotu — 3-7min</p>
							<p>• 4K Ultra HD 60 fps</p>
							<p>• do wyboru kamera: Go Pro 6/Osmo Action 4k 30/60 fps</p>
							<p>Otrzymacie: 3 minuty materialu(stabilizacja obrazu w pakiecie)</p>	
						</div>

						<div class="modal_body_item">
							<p class="modal_body_item_title">Pakiet panoramicznyj 360:</p>
							<p>Cena 200 zł:</p>
							<p>• Insta 360 one X</p>
							<p>• czas 30-60 minut</p>
							<p>• logo firmy(na zdjeciach)</p>
							<p>Otrzymacie: 10 zdjęc lub 10 min filmu 360</p>	
						</div>

						<div class="modal_body_item">
							<p class="modal_body_item_title">Pakiet Cztery Pory Roku</p>
							<p>Cena 300 zł:</p>
							<p>• Timelaps wykonywany z tego samego miejsca co 3 miesiąca</p>	
						</div>

						<div class="modal_body_item">
							<p class="modal_body_item_title">Pakiety ślubne zdjecia oraz filmy, 2-3 operatory</p>
							<p>Ceny od 1500 — 5000 zł</p>
							<p>• Technika Sony a7iii + Dron 4K</p>	
							<p>• Darmowy dojazd na terenie Szczecina</p>	
							<p>• 1 minuta promocyjnego filmu\reklama 750 zł(Sony a7III\Drony\4k)</p>	
							<p>• Obróbka materialów od 100 zł</p>	
							<p>• Dodatkowe godziny pracy: 1 godzina/100 złotych</p>	
						</div>
					</div>
				</div>
			</div>

		<div class="form">
		<form action="{{route('contact')}}" method="post" enctype="multipart/form-data" id="form" class="form_body" >

 			{{csrf_field()}}
			<div class="form_item">
				<label for="formSelect_rodzaj" class="form_lable">Rodzaj filmu</label>
				 <select id="formSelect_rodzaj" class="form_input input formSelect_rodzaj" name="rodzaj">
				 	<option value="невыбран" style="display:none">Wybrac opcje</option>
				 	<option value="Ujecia z drona" data-price="{{$value->ujecia_z_drona}}">Ujecia z drona</option>
				 	<option value="FPV dron" data-price="{{$value->fpv}}">FPV dron</option>
				    <option value="Film reklamowy lub promocyjny" data-price="{{$value->reclama}}">Film reklamowy lub promocyjny</option>	    
				    <option value="Teledysk" data-price="{{$value->teledysk}}">Teledysk</option>
				    <option value="Art clip" data-price="{{$value->art_clip}}">Art clip</option>
				 </select>
			</div>

			<div class="form_item">
				<label for="formSelect_montag" class="form_lable">Montaz wideo</label>
				 <select id="formSelect_montag" class="form_input input formSelect_montag" name="montag">
				 	<option value="невыбран" style="display:none">Wybrac opcje</option>
				    <option value="Nie potrzebuje" data-price="0">Nie potrzebuje</option>
				    <option value="Proste ciecie" data-price="{{$value->ciecie}}">Proste ciecie</option>
				    <option value="Złożona wielowarstwowa edycja z prostą grafiką i korekcja kolorów, podstawowe tytuły" data-price="{{$value->zlozona}}">Złożona wielowarstwowa edycja z prostą grafiką i korekcja kolorów, podstawowe tytuły</option>
				 </select>
			</div>

			<div class="form_item">
				<label for="formSelect_muzyka" class="form_lable">Muzyka</label>
				 <select id="formSelect_muzyka" class="form_input input formSelect_muzyka" name="muzyka">
				 	<option value="невыбран" style="display:none">Wybrac opcje</option>
				    <option value="Muzyka przesłana lub wskazana przez Ciebie" data-price="0">Muzyka przesłana lub wskazana przez Ciebie</option>
				    <option value="Wybór odpowiedniej kompozycji do wideo w Internecie" data-price="{{$value->wibor}}">Wybór odpowiedniej kompozycji do wideo w Internecie</option>
				    <option value="Muzyka do komercyjnego wykorzystania na licencji" data-price="{{$value->licencji}}">Muzyka do komercyjnego wykorzystania na licencji</option>
				    <option value="Bez muzyki">Bez muzyki</option>
				 </select>
			</div>

			<br />
			<div class="form_item">
				<label for="formRange" class="form_lable formRange_form_lable">Długosc filmu w minutach</label>
				<div class="range_body">
					<div id="range_value_div" class="range_value_div"></div>
					<div class="range_input">
						<input type="range" id="formRange" class="input range" min="1" max="60" step="1"  value="1" data-price="{{$value->minut}}"/>
					</div>
				</div>
			</div>
			<div class="form_item">
				<div class="checkboxs">
					<div class="checkbox">
						<input id="checkbox_input_lektor" type="checkbox" name="lektor" class="input checkbox_input" data-price="{{$value->lektor}}" value="on">
						<label for="checkbox_input_lektor" class="checkbox_label">Lektor</label>
					</div>
					<div class="checkbox">
						<input id="checkbox_input_chrom" type="checkbox" name="chrom" class="input checkbox_input" data-price="{{$value->chrom}}" value="on">
						<label for="checkbox_input_chrom" class="checkbox_label">Chromakey</label>
					</div>
					<div class="checkbox">
						<input id="checkbox_input_promowanie" type="checkbox" name="promowanie" class="input checkbox_input"  data-price="{{$value->promout}}" value="on">
						<label for="checkbox_input_promowanie" class="checkbox_label checkbox_label_costyl">Promowanie filmu w internecie</label>
					</div>
				</div>		
			</div>
			<div class="suma">
			<div class="suma_title">Suma $ </div><div class="vol" id="vol"></div>
			</div>
				
		<div class="kontakt_title" id="messaging">
			<div class="kontakt_title_title">WYSŁAĆ WIADOMOŚĆ​</div>
			<div class="kontakt_title_text">Jeżeli masz jakieś pytania lub chcesz skorzystać z moich usług zadzwoń do mnie, wyślij e-mail lub napisz posługując się poniższym formularzem​</div>
		</div>	
			
			<div class="form_item">
				<label for="formName" class="form_lable">Imie*</label>
				<input type="text" id="formName" name="name"  placeholder="Imię wpisz swoje imię" class="form_input _req _text">
			</div>
			<div class="form_item">
				<label for="formEmail" class="form_lable">Wpisz imie*</label>
				<input type="text" id="formEmail" name="email"  placeholder="Wpisz swój"  class="form_input _req _email">
			</div>
			<div class="form_item">
				<label for="formMassege" class="form_lable">Wiadomosc</label>
				<textarea name="message" id="formMassege" class="form_input"></textarea>			
			</div>
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