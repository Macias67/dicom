<?php

namespace App\Http\Controllers;

use Conekta\Conekta;
use Conekta\Customer;
use Conekta\Handler;
use Conekta\Order;
use Illuminate\Http\Request;

class Pago extends Controller
{
	/**
	 * Pago constructor.
	 */
	public function __construct()
	{
		Conekta::setApiKey(env('CONEKTA_API_SECRET'));
	}
	
	/**
	 * Metodo que genera la orden de pago y se
	 * conecta a https://www.conekta.com
	 *
	 * @param Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create( Request $request )
	{
		try {
			$user = Customer::create([
				"name"            => $request->cliente,
				"email"           => $request->email,
				"payment_sources" => [
					[
						"type"     => "card",
						"token_id" => $request->conektaTokenId
						//"token_id" => 'tok_test_visa_4242'
					]
				]//payment_sources
			]);
			
			$order = Order::create(
				[
					"line_items"    => [
						[
							"name"       => "Pago factura No. " . $request->nofactura,
							"unit_price" => ( (int) $request->monto * 100 ),
							"quantity"   => 1
						]//first line_item
					], //line_items
					"currency"      => "MXN",
					"customer_info" => [
						"customer_id" => $user->id
					], //customer_info
					"metadata"      => [ "factura" => $request->nofactura, "ciudad" => $request->ciudad ],
					"charges"       => [
						[
							"payment_method" => [
								"payment_source_id" => $user->default_payment_source_id,
								"type"              => "card"
							]//payment_method
						] //first charge
					] //charges
				]//order
			);
			
			return view('pagocorrecto', ['msg' => 'La factura ha sido pagada con exito.']);
		} catch (Handler $error) {
			return view('pagocorrecto', [ "error_msg" => $error->getMessage() ]);
		}
	}
	
}