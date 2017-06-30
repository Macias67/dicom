<?php

namespace App\Http\Controllers;

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
	public function create(Request $request)
	{
		dd($request->all());
	}
	
}