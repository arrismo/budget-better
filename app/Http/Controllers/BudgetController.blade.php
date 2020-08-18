<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class BudgetController extends Controller {
    public function runScript(){
        $process = new Process(['python', 'app/Http/Controllers/scrapinngScript.py']);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput(); 
    }
}