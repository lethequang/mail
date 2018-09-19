<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Cookie;

class HomeController extends Controller
{
	public function __construct() {
	}
	public function getIndex()
	{
		//$sessionId = Session::getId();
		//dd($sessionId);
		/*if ($sessionId){
		   return view('home');
	   }
	   else{
		   return redirect('http://account.web.test');
	   }*/
		//$user = Auth::user();
		//dd($user);
		$cookie = Cookie::get('shared_cookie');
		if ($cookie){
			return view('home');
		}
		else{
			return redirect('http://account.web.test');
		}
	}
}
