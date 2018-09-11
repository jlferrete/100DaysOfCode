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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function() {
	return view('hola-mundo');

});

Route::post('/hola-mundo', function() {
	return 'Hola Mundo!! Soy JLFERRETE';
});

// Route::get('/contacto', function() {
// 	return view('contacto');
// });

Route::get('/contacto/{nombre?}/{edad?}', function($nombre = "José Luis", $edad= null){
	
	/*
	return view('contacto', array(
		"nombre" => $nombre,
		"edad" => $edad
	));
	*/

	return view('contacto.contacto')
					->with('nombre', $nombre)
					->with('edad', $edad)
					->with('frutas', array('naranja','pera','sandia','fresa','melon','piña'));

}) -> where ([
	'nombre' => '[A-Za-z]+',
	'edad' => '[0-9]+'
]);


