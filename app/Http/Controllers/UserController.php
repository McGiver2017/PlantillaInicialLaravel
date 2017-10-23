<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $usuarios = usuario::all();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $usuario = new usuario();
        return view('usuarios.create', ['usuario' => $usuario]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $usuario = new usuario();
        $usuario->apellidos = $request->apellidos;
        $usuario->nombres = $request->nombres;
        $usuario->dni = $request->dni;
        $usuario->telefono = $request->telefono;
        if ($usuario->save()) {
            return redirect('/usuarios');
        } else {
            return view('usuarios.create', ['usuario' => $usuario]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
         $usuario = usuario::find($id);
                 ;
        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $usuario = usuario::find($id);
        $usuario->apellidos = $request->apellidos;
        $usuario->nombres = $request->nombres;
        $usuario->dni = $request->dni;
        $usuario->telefono = $request->telefono;
        if ($usuario->save()) {
            return redirect('/usuarios');
        } else {
            return view('usuarios.edit', ['usuario' => $usuario]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        usuario::destroy($id);
        return redirect('/usuarios');
    }

}
