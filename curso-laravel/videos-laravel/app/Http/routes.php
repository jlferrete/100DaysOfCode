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

use App\Video;

Route::get('/', function () {
    
	/*
	** Ejercicio de ejemplo de acceso a la BD mediante el ORM.
	*/

	// $videos = Video::all();
	// 	foreach($videos as $video){
	// 		echo $video->title;
	// 		echo $video->user->email.'<br/>';
	// 		foreach ($video->comments as $comment){
	// 			echo $comment->body;
	// 		}
	// 		echo "<hr/>";
	// 	}
	// 	die();


    return view('welcome');
});


Route::auth();

Route::get('/home', array(
	'as' => 'home',
	'uses' => 'HomeController@index'
));

//Rutas del controlador de Videos

Route::get('/crear-video', array(
	'as' => 'createVideo',
	'middleware' => 'auth',
	'uses' => 'VideoController@createVideo'
));

Route::post('/guardar-video', array(
	'as' => 'saveVideo',
	'middleware' => 'auth',
	'uses' => 'VideoController@saveVideo'
));
