@extends('admin.layout.layout')
@section('content')




	<div class="video_admin_form_body">

		<div class="title">Изменить видео</div>

<form  action="{{route('video.update',['video_for_edit'=>$video_for_edit->id])}}" method="post" enctype="multipart/form-data" class="video_edit_form">
{{ csrf_field() }}




<div class="main_itme_video_edit_title">
					<div class="main_itme_title">имя видео</div>
<input type="text" id="videos_admin_name" class="main_text_input" name="portfolio_video_name" value="{{$video_for_edit->portfolio_video_name}}">
</div>





	<div class="main_itme main_itme_video_edit_cover">	
					<div class="main_itme_title">обложка видео</div>
		<div class="main_img">
			 <img src="{{asset(env('THEME'))}}/site/img/foto_for_videocover/{{$video_for_edit->img_for_cover}}" alt="">
		</div>
  			<input type="hidden" name="old_cover" value="{{$video_for_edit->img_for_cover}}" >
			<input type="file" id="videos_admin_cover" class="videos_admin_cover" name="img_for_cover" value="" class="main_file_input">
	</div>






<div class="main_itme main_itme_video_edit_video">
<div class="main_itme_title">видео</div>
	<div class="main_video">
	 <video class="main_video_media" controls id="myVideo">
  		<source src="{{asset(env('THEME'))}}/site/video/{{$video_for_edit->portfolio_video}}" type="video/mp4">
  		 Your browser does not support HTML5 video.
	</video>
	</div>
  <input type="hidden" name="old_video" value="{{$video_for_edit->portfolio_video}}">

<input type="file" id="videos_admin_video" class="main_file_input" name="portfolio_video" value="">
</div>




<input type="hidden" name="_method" value="PUT">
<button type="submit" class="btn">изменить</button>
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
</div>







@endsection 