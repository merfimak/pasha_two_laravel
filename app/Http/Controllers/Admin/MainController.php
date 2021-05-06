<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Main;
use App\Work;
use App\Info;
use App\Value;

class MainController extends Controller
{


protected $main;
protected $work;
protected $info;
protected $value;

    public function show()
    {
    		
    	$this->main = Main::all()[0];
        $this->work = Work::all()[0];
        $this->info = Info::all()[0];
        $this->value = Value::all()[0];


    	return view('admin.pages.admin_main')->with(['main'=>$this->main,'work'=>$this->work,'info'=>$this->info,'value'=>$this->value]);

    }


  public function update(Request $request)
    {
    	
    if ($request->has('header')) {
  		$data = $request->except('_token','header','main_img','main_video');
  		

  		if($request->hasFile('main_img')) {

            $img = $request->main_img;
            if($img->isValid()) {
            $img->move(public_path().'/vg/site/img',$img->getClientOriginalName());
            $data['main_img'] = $img->getClientOriginalName();
            }
        }
        else{
            $data['main_img'] = $request->old_image_main;
        }

        if($request->hasFile('main_video')) {

            $video = $request->main_video;
            if($video->isValid()) {
            $video->move(public_path().'/vg/site/video',$video->getClientOriginalName());
            $data['main_video'] = $video->getClientOriginalName();
            }
        }
        else{
            $data['main_video'] = $request->old_video_main;
        }

       $main = Main::find(1);

	     $main->fill($data)->update();
	     if($main){
	        $ok = 'данные изменины';
	     return redirect()->back()->withSuccess($ok);
		}
    }


if ($request->has('news')) {
	$data = $request->except('_token');

	       $data = $request->except('_token');
	       $work = Work::find(1);


	     $work->fill($data)->update();
	     if($work){
	        $ok = 'данные изменины';
	     return redirect()->back()->withSuccess($ok);
	     
	}
}


if ($request->has('price')) {
	$data = $request->except('_token');

	       $data = $request->except('_token');
	       $value = Value::find(1);


	     $value->fill($data)->update();
	     if($value){
	        $ok = 'данные изменины';
	     return redirect()->back()->withSuccess($ok);
	     
	}
}


    if ($request->has('aboute_info')) {
  		$data = $request->except('_token','aboute_info','main_foto_about');
  		

  		if($request->hasFile('main_foto_about')) {

            $img = $request->main_foto_about;
            if($img->isValid()) {
            $img->move(public_path().'/vg/site/img/about',$img->getClientOriginalName());
            $data['main_foto_about'] = $img->getClientOriginalName();
            }
        }
        else{
            $data['main_foto_about'] = $request->old_foto_about;
        }

       

       $info = Info::find(1);
//dd($data);
	     $info->fill($data)->update();
	     if($info){
	        $ok = 'данные изменины';
	     return redirect()->back()->withSuccess($ok);
		}
    }





}
}