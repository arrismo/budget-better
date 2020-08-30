<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class PagesController extends Controller
{
	public function p3()
	{
		return view('page_3');
	}

	public function p4() {
		// $this->runScript();
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

	public function welcome(){
		return view('welcome');
	}

}
