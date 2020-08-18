<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function p3()
	{
		return view('page_3');
	}

	public function runScript(){
        $process = new Process(['python', 'app/Http/Controllers/scrapinngScript.py']);
        $process->run();

        // what's going on y'all

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput(); 
    }

	public function p4() {
		$this->runScript();
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
