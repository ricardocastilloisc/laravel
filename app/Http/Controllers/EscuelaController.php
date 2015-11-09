<?php

namespace DirectorioOnline\Http\Controllers;

use Illuminate\Http\Request;

use DirectorioOnline\Http\Requests;
use DirectorioOnline\Http\Controllers\Controller;
use DirectorioOnline\Tipo;
use DirectorioOnline\Escuela;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use DirectorioOnline\Http\Requests\EscuelaRequest;

class EscuelaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }
    public function find(Route $route){
        $this->escuela = Escuela::find($route->getParameter('escuela'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('cct') =='' && $request->get('tipo_id')==''){
            $tipos = Tipo::lists('tipo', 'id');
            $escuelas = Escuela::Escuelas();
            if($request->ajax())
            {
                return response()->json(view('escuelas.escuelas', compact('escuelas'))->render());
            }
            return view('escuelas.index', compact('escuelas','tipos'));
        }
        else
            {
                if($request->get('cct') != '')
                {
                    $tipos = Tipo::lists('tipo', 'id');
                    $escuelas = Escuela::cct($request->get('cct'))->orderBy('nombre_unidad_administrativa','ASC')->paginate(4);
                    return view('escuelas.index', compact('escuelas','tipos'));
                }
                if($request->get('tipo_id')!='')
                {
                    $tipos = Tipo::lists('tipo', 'id');
                    $escuelas = Escuela::tipo($request->get('tipo_id'))->orderBy('nombre_unidad_administrativa','ASC')->paginate(4);
                    return view('escuelas.index', compact('escuelas','tipos'));
                }
            }
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
        Escuela::create($request->all());
        Session::flash('message','Escuela Creada Correctamente');
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
        $tipos = Tipo::lists('tipo', 'id');
        return view('escuelas.edit',['escuela'=>$this->escuela,'tipos'=>$tipos]);

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
        $this->escuela->fill($request->all());
        $this->escuela->save();

        Session::flash('message','Escuela Editada Correctamente');
        return Redirect::to('/escuela');
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

        $this->escuela->delete();
        \Storage::delete($this->escuela->path);
        Session::flash('message','Escuela Eliminada Correctamente');
        return Redirect::to('/escuela');
        //
    }
}
