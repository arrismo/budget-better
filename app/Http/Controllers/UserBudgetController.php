<?php

namespace App\Http\Controllers;
use DB;

use App\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



class UserBudgetController extends Controller
{

    public function index(){
        $budgets = DB::select('select * from user_budget');
        return view('dashboard',['budgets'=>$budgets]);
    }


    public function store(Request $request){
       $budget = Budget::create($request->all());
       return view('dashboard');
    }


}
