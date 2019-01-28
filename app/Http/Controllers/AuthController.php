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
        ], [
            'name.required' => 'El nombre no puede estar vacío.',
            'name.min' => 'El nombre no puede tener menos de :min caracteres.',
            'name.max' => 'El nombre no puede tener más de :max caracteres.',
            'email.required' => 'El correo electrónico no puede estar vacío.',
            'email.email' => 'El correo electrónico ingresado no es válido.',
            'email.max' => 'El correo electrónico ingresado no puede tener más de :max caracteres',
            'email.users' => 'El correo electrónico ingresado ya se encuentra en uso',
            'password.required' => 'La contraseña no puede esta vacía',
            'password.min' => 'La contraseña debe tener al menos :min caracteres',
            'password.confirmed' => 'Las contraseñas ingresadas no coinciden'
        ]);

        $input = $request->input();

        $input['nivel'] = 'user';
        $input['estado'] = 'activo';

        $input['password'] = \Hash::make($input['password']);
        $user = User::create($input);

        Auth::login($user);

        return redirect()->route('recetas.showFrontHome')
        ->with('status', 'Usuario registrado con éxito!');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'El correo electrónico no puede estar vacío.',
            'email.email' => 'El correo electrónico ingresado no es válido.',
            'password.required' => 'La contraseña no puede esta vacía',
            'password.min' => 'La contraseña debe tener al menos :min caracteres'
        ]);

        $input = $request->input();

        if(!Auth::attempt(['password' => $input['password'], 'email' => $input['email']])) {
            return redirect()->route('login')
            ->withInput()
            ->with('status', 'Correo electrónico y/o contraseña incorrectos.');
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
}
