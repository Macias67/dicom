<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class Pago extends Controller
{
	/**
	 * Metodo que genera la orden de pago y se
	 * conecta a https://www.conekta.com
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create( Request $request)
	{
		//dd($request->all(), User::find(1));
		$user = User::find(1);
		
		$monto = (int) $request->monto * 100;
		
		$success = $user->charge($monto, [
			'card' => $request->conektaTokenId
		]);
		
		if ($success) {
			dd($success);
		} else {
			dd('pelas');
		}
	}
	
}