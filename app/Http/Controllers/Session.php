<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Session extends Controller
{
	/**
	 * Funcion para recibir las credenciales e inicar la sesión
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function login( Request $request )
	{
		//dd($user = Auth::check());
		//dd($request->user());
		
		if (Auth::attempt([ 'email' => $request->email, 'password' => $request->password ])) {
			return redirect()->intended('entrar');
		} else {
			return redirect('entrar')->with('error', 'El correo o la contraseña son incorrectas.');
		}
		
	}
	
	public function logout()
	{
		if (Auth::check()) {
			Auth::logout();
			
			return redirect('entrar');
		}
	}
}
