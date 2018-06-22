<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function showRegistro()
    {
        return view('auth.registro');
    }

    public function doRegistro(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $input = $request->input();

        $input['nivel'] = 'user';
        $input['estado'] = 'activo';

        $input['password'] = \Hash::make($input['password']);
        $user = User::create($input);

        return redirect()->route('login')
            ->with('status', 'Usuario registrado con éxito!');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:6',
        ]);

        $input = $request->input();

        if(!Auth::attempt(['password' => $input['password'], 'email' => $input['email']])) {
            // Tutti mal
            return redirect()->route('login')
                ->withInput()
                ->with('status', 'E-mail y/o password incorrectos.');
        }

        if (auth()->user()->nivel == 'admin') {
            \Session::put('admin', true);
        }

        return redirect()->intended('cpanel/recetas');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
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

//        $request->validate(User::$rules, [
//            'name.required' => 'El nombre no puede estar vacio',
//            'img_src.image' => 'El archivo debe ser una imagen.'
//        ]);

        $inputData = $request->input();

        $user = User::find($id);

        //dd($request);

        if($request->hasFile('img_src')) {
            $imagenActual = $receta->img_src;
            $filepath = $request->file('img_src')->store('img');
            $inputData['img_src'] = $filepath;
        }

        $receta->update($inputData);

        // Borramos la imagen luego del update.
        if(isset($imagenActual) && !empty($imagenActual)) {
            Storage::delete($imagenActual);
        }

        return redirect()->route('recetas.index')
            ->with(
                [
                    'status' => 'La receta <b>' . $receta->titulo . '</b> fue editada exitosamente.',
                    'class' => 'warning'
                ]
            );

    }
}
