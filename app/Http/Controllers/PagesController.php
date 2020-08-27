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

	// public function runScript(){
    //     $process = new Process(['python', 'app/Http/Controllers/scrapingScript.py']);
	// 	$process->run();

    //     // executes after the command finishes
    //     if (! $process->isSuccessful()) {
	// 		echo $process->getErrorOutput(); 
    //         throw new ProcessFailedException($process);
    //     }

    //     echo $process->getOutput(); 
    // }

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
