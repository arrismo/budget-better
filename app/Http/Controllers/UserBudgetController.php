<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class UserBudgetController extends Controller
{

    public function store(Request $request){
       $budget = Budget::create($request->all());
       return redirect()->route('/dashboard');
    }


}
