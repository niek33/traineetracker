<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TraineeController@index');
Route::resource('trainee', 'TraineeController');
Route::resource('unit', 'UnitController');
Route::resource('team', 'TeamController');
Route::resource('supervisor', 'SupervisorController');
Route::resource('statistieken', 'StatController');
