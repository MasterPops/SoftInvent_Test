<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\platform;

class indexController extends Controller
{
	 public function getPlatformList() 
    {
    	$platforms = platform::all();
    	return view('welcome')->with('platforms', $platforms);
  	}
    
}
