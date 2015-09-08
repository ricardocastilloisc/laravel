<?php

namespace PrimerProyecto\Http\Controllers;

use Illuminate\Http\Request;

use PrimerProyecto\Http\Requests;
use PrimerProyecto\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

   public function contacto()
   {
    return view('contacto');
   }
   public function reviews()
   {
    return view('reviews');
   }
}
