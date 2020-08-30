<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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



Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/signup', function () {
    return view('signup');
});


Route::get('/resources/views/welcome', 'PagesController@welcome')->name('welcome');

Route::get('/resources/views/aboutus', 'PagesController@about')->name('aboutus');

Route::get('/resources/views/dashboard', 'PagesController@db')->name('dashboard');


Route::get('/resources/views/signup', 'PagesController@sp')->name('signup');


Route::get('/resources/views/page_3', 'PagesController@p3')->name('page_3');

Route::get('/resources/views/page_4', 'PagesController@p4')->name('page_4');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/sendhtmlemail', 'MailController@html_email');

Route::get('/web-scraping','GoutteController@doWebScraping');