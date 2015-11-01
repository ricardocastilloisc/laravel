<?php

namespace DirectorioOnline\Http\Controllers;

class PruebaController extends Controller
{

    /**
     * Create a new password controller instance.
     *
     * @return Response
     */
    public function  index()
    {
        return 'hola controlador';
        
    }
    public function nombre($nombre)
    {
    	return 'mi nombre es '. $nombre;

    }
}
