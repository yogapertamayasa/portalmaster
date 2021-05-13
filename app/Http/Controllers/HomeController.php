<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function home(){
		return view('/index');
	}

	public function listhotel(){
		return view ('/hotels/hotel-list');
	}

	public function badungdestination(){
		return view ('destinations/badung-destination');
	}

	public function detailhotel(){
		return view ('/six-senses-uluwatu');
	}
}
