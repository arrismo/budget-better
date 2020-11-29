<?php

namespace App\Http\Controllers;
use DB;

use App\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



class UserBudgetController extends Controller
{

    public function store(Request $request){
       $budget = Budget::create($request->all());
       
    }


}
