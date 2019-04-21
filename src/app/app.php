<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class app extends Model
{
   public $timestamps = false;
   protected $hidden = ['id','platform'];
}
