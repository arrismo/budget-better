<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Note to Arris: gfg is to test the connection to database can delete later
Route::get('gfg', function () {
    return view('gfg');
});

Route::get('/internships', function () {
    return view('internships');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
