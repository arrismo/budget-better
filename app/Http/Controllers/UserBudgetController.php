<?php

namespace App\Http\Controllers;
use DB;

use App\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;



class UserBudgetController extends Controller
{

    public function index(){
        $budgets = DB::select('select * from user_budget');
        return view('dashboard', compact('budgets'));

    }


    public function store(Request $request){
       $budget = Budget::create($request->all());
       return view('dashboard');
    }


}
