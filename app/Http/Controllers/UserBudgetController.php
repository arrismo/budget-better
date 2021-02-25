<?php

namespace App\Http\Controllers;
use DB;

use App\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserBudgetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $budget = DB::select('select * from user_budget');
        return view('dashboard',['budget'=> $budget]);

    }


    public function store(Request $request){
        $userId = Auth::user()->id;
        Budget::updateOrCreate(['user_id' => $userId], $request->all());
        $budget = Budget::where('user_id', $userId)->first();
        return view('dashboard', ['budget' => $budget]);
    }

    public function storeCity(Request $request) {
        $user = Auth::user();
        $user->city = $request->input('cityId');
        $user->save();
        return view('page_3');
    }
}
