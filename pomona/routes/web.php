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

//inscription
route::get('/inscription','App\Http\Controllers\CompteController@formulaire');
route::post('/inscription', 'App\Http\Controllers\CompteController@insci');

//connexion
route::get('/connexion', 'App\Http\Controllers\CompteController@connect');
route::post('/connexion', 'App\Http\Controllers\CompteController@connecter');

