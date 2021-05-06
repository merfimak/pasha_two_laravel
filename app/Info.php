<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
      protected $fillable = array(
          	'description',
          	'main_foto_about',
          	'email',
          	'tel',
          	'face'
          );
}
