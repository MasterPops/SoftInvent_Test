<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\req;

class AdminController extends Controller
{
	public function get() 
    {
		$reqs = req::all();
		foreach ($reqs as $r) 
    	{
    		$r->photo = urldecode($r->photo);
    	}
    	return view('admin')->with('reqs', $reqs);
    }
}
