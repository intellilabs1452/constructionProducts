<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRegistration extends Model
{
	protected $table = 'user_registration';
//	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'company_name', 'street_address','postbox', 'emirate','user_id',
	];
}