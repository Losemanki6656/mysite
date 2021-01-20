<?php

use Illuminate\Support\Facades\Route;
//use App;
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

Route::get('/', 'TestController@index');
Route::get('/vacand/{id}', 'VacansController@index')->name('vacand');

Route::get('/respon/{id}', 'ResponsartController@index')->name('respon');
Route::post('/respon', 'ResponsartController@store')->name('respon.store');

Route::post('/questest/check', 'QuestestsController@check')->name('questest.check');
Route::get('/questest/{id}', 'QuestestsController@index')->name('questest');

//Route::resource('','StateController');


Route::get('/registor/tests/a', function() 
{
return view('clienttest');
}
);