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
/*
Pruebas de rutas
Route::get('prueba', function () {
    return 'hola desde routes.php';
});

$router->get('nombre/{nombre}', function($nombre)
{
	return "Mi nombre es ".$nombre;

});

$router->get('edad/{edad}', function($edad)
{
	return "mi edad es ".$edad;
});

$router->get('edad2/{edad?}', function($edad = 20)
{
	return "mi edad es ".$edad;

});
*/
/*
Ejemplo de controladores
Route::get('controlador' , 'PruebaController@index');

$router->get('name/{nombre}' , 'PruebaController@nombre');
*/

//metodo rest para multiples metodos
//$router->resource('directorio', 'DirectorioController');



Route::get('/','FrontController@index');
//Route::get('contacto','FrontController@contacto');
//Route::get('reviews','FrontController@reviews');
//
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');

Route::resource('log','LogController');
Route::resource('tipo','TipoController');

Route::resource('escuela','EscuelaController');

Route::get('logout','LogController@logout');
Route::get('tipos','TipoController@listing');



