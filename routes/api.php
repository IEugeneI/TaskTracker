<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('tasks', 'TaskController')->middleware('checkstatus');
Route::resource('users', 'UserController');
Route::get('tasks/getTasksForStatus/{status}', 'TaskController@getTasksForStatus');
Route::post('tasks/changeTaskStatus/{id}', 'TaskController@changeTaskStatus')->middleware('checkstatus');
Route::post('tasks/changeUser', 'TaskController@changeUser');
