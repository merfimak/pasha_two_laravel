<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses'=>'MainController@show','as'=>'main']);
Route::post('/', ['uses'=>'MainController@contact','as'=>'contact']);
Route::get('/portfolio', ['uses'=>'PortfolioController@show','as'=>'portfolio']);


Auth::routes();


Route::group(['prefix' => 'admin','middleware'=> 'auth'],function() {


Route::get('/main', ['uses'=>'Admin\MainController@show','as'=>'admin_main']);
Route::post('/main', ['uses'=>'Admin\MainController@update','as'=>'admin_main_post']);

Route::resource('/foto','Admin\FotoController');
Route::resource('/video','Admin\VideoController');

Route::get('/home', ['uses'=>'HomeController@index','as'=>'home']);


});


/*View :

<form action="/url" method="post">
    <input name="some_field" value="1">
    <button type="submit" name="form1">Submit 1</button>
</form>
<form action="/url" method="post">
    <input name="some_field" value="1">
    <button type="submit" name="form2">Submit 2</button>
</form>
Now in Controller :

if ($request->has('form1')) {
    //handle form1
}

if ($request->has('form2')) {
    //handle form2
}*/