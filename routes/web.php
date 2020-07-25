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


/*Route::get('/page_3', function () {
    return view('page_3');
});*/

Route::get('/page_4', function () {
    return view('page_4');
});


Route::get('/signup', function () {
    return view('signup');
});


Route::post('/resources/views/page_3', 'PagesController@p3')->name('page_3');

Route::get('/resources/views/page_4', 'PagesController@p4')->name('page_4');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
