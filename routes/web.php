<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/about', 'App\Http\Controllers\RouteController@showAbout')->name('about');
Route::get('/contact', 'App\Http\Controllers\RouteController@showContact')->name('contact');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/formations', 'App\Http\Controllers\FormationController@index')->name('formation');
Route::get('/formations/{id}', 'App\Http\Controllers\FormationController@getFormations')->name('domain');
Route::get('/formations/{id}/details/', 'App\Http\Controllers\FormationController@getDetailsFormations')->name('getDetails');
Route::post('/formations/{id}/details/', 'App\Http\Controllers\FormationUserController@create')->name('subscribe');
Route::get('/profil/{id}', 'App\Http\Controllers\FormationController@getProfil')->name('getProfil');
