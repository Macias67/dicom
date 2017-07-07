<?php

namespace App\Http\Controllers;

use Conekta\Conekta;
use Conekta\Customer;
use Conekta\Handler;
use Conekta\Order;
use Conekta\ParameterValidationError;
use Conekta\ProcessingError;
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
				"name"            => "Cecilia Paola",
				"email"           => "fulanito@conekta.com",
				"phone"           => "+523929418119",
				"payment_sources" => [
					[
						"type"     => "card",
						"token_id" => "tok_test_card_declined"
					]
				]//payment_sources
			]);
			
			$order = Order::create(
				[
					"line_items"    => [
						[
							"name"       => "Tacos",
							"unit_price" => 1000,
							"quantity"   => 12
						]//first line_item
					], //line_items
					"currency"      => "MXN",
					"customer_info" => [
						"customer_id" => $user->id
					], //customer_info
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
			
			echo $order;
		} catch (ProcessingError $error) {
			echo $error->getMessage();
		} catch (ParameterValidationError $error) {
			echo $error->getMessage();
		} catch (Handler $error) {
			echo $error->getMessage();
		}
	}
	
}