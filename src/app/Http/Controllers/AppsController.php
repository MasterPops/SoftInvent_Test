<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\app;
use Storage;
use Illuminate\Http\Response;

class AppsController extends Controller
{
    public function get(Request $request) 
    {
    	$apps = app::where('platform',$request->platform)->get();
    	foreach ($apps as $app) 
    	{
    		$app->icon = urldecode($app->icon);
    		$app->link = urldecode($app->link);
    	}
    	return $apps->toJson();
  	}

  	public function post(Request $request) 
    {
    	$this->validate($request, [
					'icon' => 'dimensions:min_width=512,min_height=512,max_width=1024,max_height=1024,ratio=1/1|image',
					'title' => 'required|min:2|max:80',
					'link' => 'required|url'

    			]);
    	$path = $request->icon->store('public/apps');
    	$app = new app;
    	$app->title = $request->title;
    	$app->platform = $request->platform;
    	$app->link = urlencode($request->link);
        $app->icon = urlencode(url(Storage::url($path)));
    	$app->save();
    	return redirect('/');
  	}
}
