<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\http\Controllers\StudentController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api/students/create', 'StudentController@create')->name('students.create');

Route::get('/api/students', 'StudentController@index')->name('students.index');
Route::post('/api/students', 'StudentController@store')->name('students.store');
Route::get('/api/students/{id}/edit', 'StudentController@edit')->name('students.edit');
Route::put('/api/students/{id}', 'StudentController@update')->name('students.update');
Route::delete('/api/students/{id}', 'StudentController@destroy')->name('students.destroy');