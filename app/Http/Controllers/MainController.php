<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;
use App\Work;
use App\Info;
use App\Value;
use Validator;
use Mail;
use App\Mail\ContactMail;
use Response;
class MainController extends SiteController
{


protected $main;
protected $work;
protected $info;
protected $value;




     public function __construct(){

        $this->template = '.site.layouts.primary';

    }




    public function show()
    {
		$this->title = 'FPV DRON AERIAL CINEMATIC';
        $this->main = Main::all()[0];
        $this->work = Work::all()[0];
        $this->info = Info::all()[0];
        $this->value = Value::all()[0];
//dump($this->main->main_img);
      $content = view('.site.pages.main_content')->with(['main'=>$this->main,'work'=>$this->work,'info'=>$this->info,'value'=>$this->value])->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();

}


    public function contact(Request $request)
    {

       
    $data = $request->except(['_token']);

  
        $validator = Validator::make($data,[ 
        'name' => 'required|max:100|min:2',
        'email' => 'required|email',
        ]);

    if($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);//ответ в формате json, что бы работать не с обьектом а с масивом добавляем ->all()
        }



       Mail::to('sonderlingmeister@gmail.com')->send(new ContactMail($data));
       Mail::to('dron@yavorskyi.com')->send(new ContactMail($data));



              return response()->json(['success' => TRUE,'data' => $data]);// передаем в формате json, мы сами это прописали в datatype:'JSON'*/
        






    }






}
