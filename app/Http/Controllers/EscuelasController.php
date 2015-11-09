<?php

namespace DirectorioOnline\Http\Controllers;

use Illuminate\Http\Request;

use DirectorioOnline\Http\Requests;
use DirectorioOnline\Http\Controllers\Controller;

use DirectorioOnline\Tipo;
use DirectorioOnline\Escuelas;
use Session;
use Redirect;
use Illuminate\Routing\Route;

use DirectorioOnline\Http\Requests\EscuelaRequest;

class EscuelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $escuelas = Escuelas::Escuelass();
        if($request->ajax())
        {
            return response()->json(view('escuelas.escuelas', compact('escuelas'))->render());
        }
        return view('escuelas.index', compact('escuelas'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::lists('tipo', 'id');
        return view('escuelas.create', compact('tipos'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EscuelaRequest $request)
    {
        Escuelas::create($request->all());
        Session::flash('message','Escuela Agregado Correctamente Correctamente');
        return Redirect::to('/escuela');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
