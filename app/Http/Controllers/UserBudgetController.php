<?php

namespace App\Http\Controllers;
use DB;

use App\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Auth;


class UserBudgetController extends Controller
{

    public function index(){
        $budget = DB::select('select * from user_budget');
        return view('dashboard',['budget'=> $budget]);

    }


    public function store(Request $request){
        $userId = Auth::id();
        Budget::updateOrCreate(['user_id' => $userId], $request->all());
        $budget = Budget::where('user_id', $userId)->first();
        return view('dashboard', ['budget' => $budget]);
    }


}
