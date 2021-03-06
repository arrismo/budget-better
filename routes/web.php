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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/login', function ()    {
        return view('login');
    });
});

Route::get('gfg', function () {
    return view('gfg');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/resources/views/welcome', 'PagesController@welcome')->name('welcome');

Route::get('/resources/views/aboutus', 'PagesController@about')->name('aboutus');

Route::any('/resources/views/dashboard', 'UserBudgetController@store')->name('dashboard');

Route::get('/dashboard1', 'UserBudgetController@index')->name('dashboard1');

Route::get('/dashboard', 'UserBudgetController@store');



Route::get('/resources/views/signup', 'PagesController@sp')->name('signup');

Route::post('/resources/views/page_3', 'PagesController@p3')->name('page_3');

Route::get('/resources/views/page_4/{city}', 'PagesController@p4')->name('page_4');

Auth::routes();

Route::post('/sendhtmlemail', 'MailController@html_email');

Route::post('/addcity', 'UserBudgetController@storeCity')->name('add_city');