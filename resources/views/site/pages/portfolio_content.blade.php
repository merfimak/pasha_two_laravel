<div class="porfolio">






		<div class="porfolio_video">
		<div class="porfolio_video_body">
			<div class="porfolio_video_title">video </div>
			<div class="porfolio_video_content">
				<div class="swiper-container video_swiper">
			    <div class="swiper-wrapper">

			    	@foreach($portfolio_videos as $video)
			    	  <div class="swiper-slide video_slide">
				      	<div class="video_popup ibg" data-src="{{asset(env('THEME'))}}/site/video/{{$video->portfolio_video}}">
							<img class="video_popup_img" src="{{asset(env('THEME'))}}/site/img/foto_for_videocover/{{$video->img_for_cover}}" alt="">
						</div>
					</div>
			    	@endforeach  


			    </div>
			   <!-- Add Pagination -->
    			<div class="swiper-pagination"></div> 
			  </div>
			</div>		
		</div>
	</div>

		<div class="modal_for_video">
	<div class="modal_video_body">
		<div class="video_pauses" id="video_pauses">X</div>
		<video controls autoplay class="modalvideo" id="myVideo">
		  	<source src="" type="video/mp4">
		  		Your browser does not support HTML5 video.
		 </video>
	</div>
</div>
<div class="modal">
	<div class="modal_body"><img src="" alt=""></div>
</div>




	<div class="porfolio_foto">
		<div class="porfolio_foto_body">
			<div class="porfolio_foto_title">foto</div>
			<div class="porfolio_foto_content">
				<div class="swiper-container foto_swiper">
			    <div class="swiper-wrapper">
			    	@foreach($portfolio_fotos as $foto)
			    		   <div class="swiper-slide ibg foto_slide"><img src="{{asset(env('THEME'))}}/site/img/portfolio/{{$foto->portfolio_img}}" alt=""></div>
			    	  @endforeach 
			    </div>
			   <!-- Add Pagination -->
    			<div class="swiper-pagination"></div>
			  </div>
			</div>		
		</div>
	</div>





</div>