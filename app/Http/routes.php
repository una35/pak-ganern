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

Route::auth();

Route::get('/todo', 'TodoController@todo');

Route::get('/main', 'TodoController@index');

Route::get('/home', 'HomeController@index');

Route::post('/todo', 'TodoController@store');

Route::get('/word', 'WordController@index' );

Route::post('/word', 'WordController@index' );

Route::get('/word/add', function(){
	return view( 'word.add' );
});

Route::get('/note/add', function(){
	return view( 'note.add' );
});

Route::post('/word/add', 'WordController@add' );

Route::get('/quiz', 'QuizController@index' );

Route::get('/next', 'QuizController@next' );

Route::get('/dictionary', 'DictionaryController@index');

Route::get('/note', 'PostController@index' );

Route::post('/addnew', 'PostController@add' );

Route::get('/note/{id}/destroy', 'PostController@destroy');

Route::patch('/note/{id}', 'PostController@editsave');

Route::get('/note/{id}/edit', 'PostController@edit');

Route::get('/note/{id}', 'PostController@show');

Route::get('/{id}', 'TodoController@destroy');
