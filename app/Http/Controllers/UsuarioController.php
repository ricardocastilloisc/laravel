<?php

namespace DirectorioOnline\Http\Controllers;

use Illuminate\Http\Request;

use DirectorioOnline\Http\Requests;
use DirectorioOnline\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //returnando las lista
        $users = \DirectorioOnline\User::All();
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
    public function store(Request $request)
    {
        \DirectorioOnline\User::create(
            [
                'name' => $request['name'],
                'namep' => $request['namep'],
                'namem' => $request['namem'],
                'email'=> $request['email'],
                'password'=> bcrypt($request['password']),
            ]
            );
        //esta parte es para mandar un mensaje con una variable
        return redirect('/usuario')->with('message','store');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
