<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class VideoController extends Controller
{

    protected $video_items;
    protected $title;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $this->title = 'Video';
        $this->video_items = Video::all();


         return view('admin.pages.admin_videos')->with('title', $this->title)->with('video_items', $this->video_items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Video $video)
    {
        $request->validate([
        'portfolio_video_name' => 'required|min:1'
        ]);

        $data = $request->except('_token','img_for_cover','portfolio_video');
        if($request->hasFile('img_for_cover')) {
            $img = $request->img_for_cover;
            if($img->isValid()) {
            $img->move(public_path().'/vg/site/img/foto_for_videocover',$img->getClientOriginalName());
            $data['img_for_cover'] = $img->getClientOriginalName();
            }
        }
        else{
            $data['img_for_cover'] = '';
        }

        if($request->hasFile('portfolio_video')) {
            $img = $request->portfolio_video;
            if($img->isValid()) {
            $img->move(public_path().'/vg/site/video',$img->getClientOriginalName());
            $data['portfolio_video'] = $img->getClientOriginalName();
            }
        }
        else{
            $data['portfolio_video'] = '';
        }
      $video->fill($data)->save();
          if($video){
            $ok = 'добавлено';
            return redirect()->back()->withSuccess($ok);
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $this->title = 'Video edit';
         $this->video_for_edit = Video::find($id);
        if(!$this->video_for_edit){
            abort(404);
        }

         return view('admin.pages.admin_video_edit')->with('title', $this->title)->with('video_for_edit', $this->video_for_edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'portfolio_video_name' => 'required|min:1'
        ]);

        $data = $request->except('_token','img_for_cover','portfolio_video');
        if($request->hasFile('img_for_cover')) {
            $img = $request->img_for_cover;
            if($img->isValid()) {
            $img->move(public_path().'/vg/site/img/foto_for_videocover',$img->getClientOriginalName());
            $data['img_for_cover'] = $img->getClientOriginalName();
            }
        }
        else{
            $data['img_for_cover'] = $request->old_cover;
        }

        if($request->hasFile('portfolio_video')) {
            $img = $request->portfolio_video;
            if($img->isValid()) {
            $img->move(public_path().'/vg/site/video',$img->getClientOriginalName());
            $data['portfolio_video'] = $img->getClientOriginalName();
            }
        }
        else{
            $data['portfolio_video'] = $request->old_video;
        }
     $video = Video::find($id);
           $video->fill($data)->update();
          if($video){
            $ok = 'изменено';
            return redirect()->back()->withSuccess($ok);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video_item = Video::find($id);
        $video_item->delete();
        $ok = 'удалено';
        return redirect()->back()->withSuccess($ok);
    }
}
