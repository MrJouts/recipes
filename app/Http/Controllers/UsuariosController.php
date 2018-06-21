<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\User;
use Storage;


class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::get();
        return view('cpanel.usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $request->validate(Usuario::$rules, [
            'name.required' => 'El nombre no puede estar vacio',
            'name.min' => 'El nombre debe tener al menos :min caracteres',
            'avatar.image' => 'El narchivo debe ser una imagen .jpg o .png'
        ]);

        $inputData = $request->input();

        $usuario = Usuario::find($id);

        if($request->hasFile('avatar')) {
            $imagenActual = $usuario->avatar;
            $filepath = $request->file('avatar')->store('avatar');
            $inputData['avatar'] = $filepath;
        }

        $usuario->update($inputData);

        // Borramos la imagen luego del update.
        if(isset($imagenActual) && !empty($imagenActual)) {
            Storage::delete($imagenActual);
        }

        return back()
            ->with(
                [
                    'status' => 'Datos actualizados',
                    'class' => 'success'
                ]
            );

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
