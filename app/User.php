<?php

namespace App;

use Dinkbit\ConektaCashier\Billable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Dinkbit\ConektaCashier\Contracts\Billable as BillableContract;

class User extends Authenticatable implements BillableContract
{
	use Notifiable, Billable;
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];
	
	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];
	
	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = [ 'trial_ends_at', 'subscription_end_at' ];
}
