<?php

namespace DirectorioOnline\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use Session;
use  Redirect;

use DirectorioOnline\User;
use DirectorioOnline\Http\Requests;
use DirectorioOnline\Http\Requests\UserUpdateRequest;
use DirectorioOnline\Http\Requests\UserCreateRequest;


use DirectorioOnline\Http\Controllers\Controller;


class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //permisos de usuario
        $this->middleware('admin',['only'=> ['create', 'edit']]);
        $this->beforeFilter('@find',['only' =>['edit','update','destroy']]);    
    }
    public function find(Route $route)
    {
        $this->user = User::find($route->getParameter('usuario')); 
    }
    /**
     * Display a listing of the resource. 
     *
     * @return Response
     */
    public function index(Request $request)
    {
        //returnando las lista
        $users = User::paginate(3); 
        if($request->ajax())
        {
            return response()->json(view('usuario.users', compact('users'))->render());
        }
        //enviamos la variable
        return view('usuario.index',compact('users'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    { 
        return view('usuario.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(UserCreateRequest $request)
    {
         User::create($request->all());
        //esta parte es para mandar un mensaje con una variable
        Session::flash('message','Usuario Creado Correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //mandamos la variable como user  
        return view('usuario.edit',['user'=>$this->user]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
    
        $this->user->fill($request->all());
        $this->  user->save();

        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    
        $this->user->delete();

        Session::flash('message','Usuario Eliminado Correctamente');

        return Redirect::to('/usuario');
        //
    }
    


}
