<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiteController extends Controller
{
  

	protected $template;//имя шаблона
	protected $title;
	protected $vars = array();// масив передаваемых переменных в шаблон

	
		protected function renderOutput(){

		$this->vars = array_add($this->vars, 'title',$this->title);		

		$navigation = view('.site.parts.navigation')->render();
		$this->vars = array_add($this->vars,'navigation',$navigation);

		$footer = view('.site.parts.footer')->render();
		$this->vars = array_add($this->vars, 'footer',$footer);

		return view($this->template)->with($this->vars);
	}



	
}
