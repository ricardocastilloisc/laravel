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
Route::get('/', function () {
    return view('welcome');
});
