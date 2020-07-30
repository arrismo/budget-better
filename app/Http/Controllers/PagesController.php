<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{




	public function p3()
	{
		return view('page_3');
	}




	public function p4()
	{
		return view('page_4');
	}

	public function sp()
	{
		return view('signup');
	}


	public function db(){
		return view('dashboard');
	}

	public function about(){
		return view('aboutus');
	}

	





    



}
