<?php

namespace DirectorioOnline\Http\Controllers;

use Illuminate\Http\Request;

use DirectorioOnline\Http\Requests;
use DirectorioOnline\Http\Requests\TipoRequest;
use DirectorioOnline\Http\Controllers\Controller;
use DirectorioOnline\Tipo;
use Illuminate\Routing\Route;
class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin',['only'=> ['create', 'edit','destroy']]);
        $this->beforeFilter('@find',['only'=> ['edit', 'update','destroy']]);
    }
    public function find(Route $route)
    {
        $this->tipo = Tipo::find($route->getParameter('tipo'));
    }
    public function listing()
    {
        $tipos = Tipo::all();
        return response()->json(
                $tipos->toArray()
            );
    }
    public function index()
    {
        return view('tipo.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoRequest $request)
    {
        if($request->ajax())
        {
            Tipo::create($request->all());
            return response()->json([
                "mensaje"=> "creado"
                ]);
        }
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
        
        return response()->json(
                $this->tipo->toArray()
            );
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

        $this->tipo->fill($request->all());
        $this->tipo->save();

        return response()->json([
                "mensaje" => "listo"
            ]);
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
        $this->tipo->delete();
        return response()->json(["mensaje"=>"borrado"]);
        //
    }
}
