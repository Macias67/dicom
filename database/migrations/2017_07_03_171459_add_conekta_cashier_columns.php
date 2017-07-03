<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConektaCashierColumns extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function( Blueprint $table ) {
			$table->tinyInteger('conekta_active')->default(0);
			$table->string('conekta_id')->nullable();
			$table->string('conekta_subscription')->nullable();
			$table->string('conekta_plan', 35)->nullable();
			$table->string('card_type', 30)->nullable();
			$table->string('last_four', 4)->nullable();
			$table->timestamp('trial_ends_at')->nullable();
			$table->timestamp('subscription_ends_at')->nullable();
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function( Blueprint $table ) {
			$table->dropColumn(
				'conekta_active', 'conekta_id', 'conekta_subscription', 'conekta_plan', 'card_type', 'last_four', 'trial_ends_at', 'subscription_ends_at'
			);
		});
	}
	
}
