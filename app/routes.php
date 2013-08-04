<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


/*Media Routes*/
//Route::get('medias/{id}', 'medias@show');

Route::get('medias', 'medias@index');
Route::get('medias', array('as' => 'medias', 'uses' => 'medias@index'));
Route::get('medias/{id}', array('as' => 'medias', 'uses' => 'medias@show'));
Route::get('medias/new', array('as' => 'new_medias', 'uses' => 'medias@new'));
Route::post('medias', 'medias@create');
Route::put('medias/{id}', 'medias@update');
Route::delete('medias/{id}', 'medias@destroy');


/*Notes Routes*/

Route::get('notes', 'notes@index');
Route::get('notes', array('as' => 'notes', 'uses' => 'notes@index'));
Route::get('notes/{id}', array('as' => 'notes', 'uses' => 'notes@show'));
Route::get('notes/filter/{id}', array('as' => 'notes', 'uses' => 'notes@filter'));
Route::get('notes/new', array('as' => 'new_notes', 'uses' => 'notes@new'));
Route::post('notes', 'notes@create');
Route::put('notes/{id}', 'notes@update');
Route::delete('notes/{id}', 'notes@destroy');