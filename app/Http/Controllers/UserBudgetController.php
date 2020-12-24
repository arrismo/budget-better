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
        $budget = DB::select('select * from user_budget');
        return view('dashboard',['budget'=> $budget]);

    }


    public function store(Request $request){
       $budget = Budget::create($request->all());
       return view('dashboard', ['budget' => $budget]);
    }


}
