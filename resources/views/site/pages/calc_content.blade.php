




<div class="kontakt" id="kontakt">
	<div class="kontakt_body" id="cennik">


			<div class="kontakt_calcTitle kontakt_title_title kastil_for_calc">KALKULATOR CENY</div>
			<div class="kontakt_calcText kontakt_title_text">Uwaga: Kalkulator jest narzędziem pomocniczym.
				Ostateczna cena może być inna w zaleznosci od potrzeb, wymagań i oczekiwań klienta.
				Oferuje wspolprace studjom filmowym, agencjom reklamowym.
				Piszcie, dzwońcie, na pewno się dogadamy!
			</div>



		<div class="form ">
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
				
		</form>
		</div>
	</div>
</div>








