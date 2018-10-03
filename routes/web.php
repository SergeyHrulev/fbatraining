<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', function (){
//    return redirect('/antibudget');
//});
//Route::get('/antibudget', 'LandingsController@antibudget');
//Route::get('/hr', 'LandingsController@hr');
Route::get('/', 'LandingsController@roadmap');
Route::post('/save', 'MailController@saveData');