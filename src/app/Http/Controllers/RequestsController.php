<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\req;
use Storage;

class RequestsController extends Controller
{
	public function get(Request $request) 
    {
    	$req = req::all();
    	if (isset($request->since) && isset($request->due)) 
    	{
    		$req = req::where('created_at','>=',$request->since)->where('created_at','<=',$request->due)->get();
    	}
    	elseif (isset($request->since)) 
    	{
    		$req = req::where('created_at','>=',$request->since)->get();
    	}
    	elseif (isset($request->due)) 
    	{
    		$req = req::where('created_at','<=',$request->due)->get();
    	}
    	foreach ($req as $r) 
    	{
    		$r->photo = urldecode($r->photo);
    	}
    	return $req->toJson();
  	}

    public function post(Request $request) 
    {
    	$this->validate($request, [
					'name' => 'required',
					'comment' => 'required'

    			]);
    	$req = new req;
    	if (isset($request->photo)) 
    	{
    		$path = $request->photo->store('public/requests');
    		$req->photo = urlencode(url(Storage::url($path)));
    	}
    	$req->name = $request->name;
    	$req->comment = $request->comment;
    	$req->save();
    	return redirect('/');
  	}
}
