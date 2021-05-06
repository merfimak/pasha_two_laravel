@extends('admin.layout.layout')
@section('content')





	<div class="foto_admin_form_body">

		<div class="title">Изменить фото</div>

<form  action="{{route('foto.update',['foto_for_edit'=>$foto_for_edit->id])}}" method="post" enctype="multipart/form-data" class="foto_edit_form">
{{ csrf_field() }}


		<div class="main_itme">
			<div class="main_itme_title">имя фотки</div>
			<input type="text" id="name" class="main_text_input" name="portfolio_img_name" value="{{$foto_for_edit->portfolio_img_name}}">
		</div>

		<div class="main_itme">
			<div class="main_itme_title">описание фотки</div>
			<input type="text" name="portfolio_img_info" class="main_text_input" value="{{$foto_for_edit->portfolio_img_info}}">
		</div>


			<div class="main_itme">		
				<div class="main_img">
				 <img src="{{asset(env('THEME'))}}/site/img/portfolio/{{$foto_for_edit->portfolio_img}}" alt="">
				  <input type="hidden" name="old_image" value="{{$foto_for_edit->portfolio_img}}">
				</div>
		    </div>



<input type="file" name="portfolio_img">

<input type="hidden" name="_method" value="PUT">
<button type="submit" class="btn edit_btn">изменить</button>
</form>









 @if (count($errors) > 0)
  <div class="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif




@endsection