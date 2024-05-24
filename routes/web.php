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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\C1studentController;
use App\Http\Controllers\C1subjecttController;
use App\Http\Controllers\C1pointController;
use App\Http\Controllers\C2studentController;
use App\Http\Controllers\C2subjectController;
use App\Http\Controllers\C2pointController;
use App\Http\Controllers\T1studentController;
use App\Http\Controllers\T1subjectController;
use App\Http\Controllers\T1pointController;
use App\Http\Controllers\T2studentController;
use App\Http\Controllers\T2subjectController;
use App\Http\Controllers\T2pointController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home1', 'HomeController@home1')->name('home');

Route::get('/c1students/create', 'C1studentController@create')->name('c1students.create');
Route::get('/c1students', 'C1studentController@index')->name('c1students.index');
Route::post('/c1students', 'C1studentController@store')->name('c1students.store');
Route::get('/c1students/{id}/edit', 'C1studentController@edit')->name('c1students.edit');
Route::put('/c1students/{id}', 'C1studentController@update')->name('c1students.update');
Route::delete('/c1students/{id}', 'C1studentController@destroy')->name('c1students.destroy');

Route::get('/c1subjects/create', 'C1subjectController@create')->name('c1subjects.create');
Route::get('/c1subjects', 'C1subjectController@index')->name('c1subjects.index');
Route::post('/c1subjects', 'C1subjectController@store')->name('c1subjects.store');
Route::get('/c1subjects/{id}/edit', 'C1subjectController@edit')->name('c1subjects.edit');
Route::put('/c1subjects/{id}', 'C1subjectController@update')->name('c1subjects.update');
Route::delete('/c1subjects/{id}', 'C1subjectController@destroy')->name('c1subjects.destroy');


Route::get('/c1points/create', 'C1pointController@create')->name('c1points.create');
Route::get('/c1points', 'C1pointController@index')->name('c1points.index');
Route::post('/c1points', 'C1pointController@store')->name('c1points.store');
Route::get('/c1points/{id}/edit', 'C1pointController@edit')->name('c1points.edit');
Route::put('/c1points/{id}', 'C1pointController@update')->name('c1points.update');
Route::delete('/c1points/{id}', 'C1pointController@destroy')->name('c1points.destroy');



Route::get('/c2students/create', 'C2studentController@create')->name('c2students.create');
Route::get('/c2students', 'C2studentController@index')->name('c2students.index');
Route::post('/c2students', 'C2studentController@store')->name('c2students.store');
Route::get('/c2students/{id}/edit', 'C2studentController@edit')->name('c2students.edit');
Route::put('/c2students/{id}', 'C2studentController@update')->name('c2students.update');
Route::delete('/c2students/{id}', 'C2studentController@destroy')->name('c2students.destroy');

Route::get('/c2subjects/create', 'C2subjectController@create')->name('c2subjects.create');
Route::get('/c2subjects', 'C2subjectController@index')->name('c2subjects.index');
Route::post('/c2subjects', 'C2subjectController@store')->name('c2subjects.store');
Route::get('/c2subjects/{id}/edit', 'C2subjectController@edit')->name('c2subjects.edit');
Route::put('/c2subjects/{id}', 'C2subjectController@update')->name('c2subjects.update');
Route::delete('/c2subjects/{id}', 'C2subjectController@destroy')->name('c2subjects.destroy');


Route::get('/c2points/create', 'C2pointController@create')->name('c2points.create');
Route::get('/c2points', 'C2pointController@index')->name('c2points.index');
Route::post('/c2points', 'C2pointController@store')->name('c2points.store');
Route::get('/c2points/{id}/edit', 'C2pointController@edit')->name('c2points.edit');
Route::put('/c2points/{id}', 'C2pointController@update')->name('c2points.update');
Route::delete('/c2points/{id}', 'C2pointController@destroy')->name('c2points.destroy');




Route::get('/t1students/create', 'T1studentController@create')->name('t1students.create');
Route::get('/t1students', 'T1studentController@index')->name('t1students.index');
Route::post('/t1students', 'T1studentController@store')->name('t1students.store');
Route::get('/t1students/{id}/edit', 'T1studentController@edit')->name('t1students.edit');
Route::put('/t1students/{id}', 'T1studentController@update')->name('t1students.update');
Route::delete('/t1students/{id}', 'T1studentController@destroy')->name('t1students.destroy');

Route::get('/t1subjects/create', 'T1subjectController@create')->name('t1subjects.create');
Route::get('/t1subjects', 'T1subjectController@index')->name('t1subjects.index');
Route::post('/t1subjects', 'T1subjectController@store')->name('t1subjects.store');
Route::get('/t1subjects/{id}/edit', 'T1subjectController@edit')->name('t1subjects.edit');
Route::put('/t1subjects/{id}', 'T1subjectController@update')->name('t1subjects.update');
Route::delete('/t1subjects/{id}', 'T1subjectController@destroy')->name('t1subjects.destroy');


Route::get('/t1points/create', 'T1pointController@create')->name('t1points.create');
Route::get('/t1points', 'T1pointController@index')->name('t1points.index');
Route::post('/t1points', 'T1pointController@store')->name('t1points.store');
Route::get('/t1points/{id}/edit', 'T1pointController@edit')->name('t1points.edit');
Route::put('/t1points/{id}', 'T1pointController@update')->name('t1points.update');
Route::delete('/t1points/{id}', 'T1pointController@destroy')->name('t1points.destroy');





Route::get('/t2students/create', 'T2studentController@create')->name('t2students.create');
Route::get('/t2students', 'T2studentController@index')->name('t2students.index');
Route::post('/t2students', 'T2studentController@store')->name('t2students.store');
Route::get('/t2students/{id}/edit', 'T2studentController@edit')->name('t2students.edit');
Route::put('/t2students/{id}', 'T2studentController@update')->name('t2students.update');
Route::delete('/t2students/{id}', 'T2studentController@destroy')->name('t2students.destroy');

Route::get('/t2subjects/create', 'T2subjectController@create')->name('t2subjects.create');
Route::get('/t2subjects', 'T2subjectController@index')->name('t2subjects.index');
Route::post('/t2subjects', 'T2subjectController@store')->name('t2subjects.store');
Route::get('/t2subjects/{id}/edit', 'T2subjectController@edit')->name('t2subjects.edit');
Route::put('/t2subjects/{id}', 'T2subjectController@update')->name('t2subjects.update');
Route::delete('/t2subjects/{id}', 'T2subjectController@destroy')->name('t2subjects.destroy');


Route::get('/t2points/create', 'T2pointController@create')->name('t2points.create');
Route::get('/t2points', 'T2pointController@index')->name('t2points.index');
Route::post('/t2points', 'T2pointController@store')->name('t2points.store');
Route::get('/t2points/{id}/edit', 'T2pointController@edit')->name('t2points.edit');
Route::put('/t2points/{id}', 'T2pointController@update')->name('t2points.update');
Route::delete('/t2points/{id}', 'T2pointController@destroy')->name('t2points.destroy');