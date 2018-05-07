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

		return redirect()->intended('cpanel/recetas');
	}

	public function logout()
	{
		Auth::logout();
		return redirect('/');
	}
}
