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
class CalcController extends SiteController
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
        
        $this->value = Value::all()[0];
      $content = view('.site.pages.calc_content')->with(['value'=>$this->value])->render();
        $this->vars = array_add($this->vars,'content',$content);

        return $this->renderOutput();

}


   






}
