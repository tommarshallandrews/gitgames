<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;


class User extends Eloquent implements UserInterface, RemindableInterface {


	protected $guarded = [array('id','created_at','updated_at')];


	public static $updateRules = array(
		'firstname'=>'required',
		'lastname'=>'required',
		'username'=>'required',
		'email'=>'required|email',
		//'email'=>'required|email|unique:users',

	);


	public static $newUpdateRules = array(
		'email'=>'required|email|unique:users',
		'username'=>'required',
		'password'=>'required|alpha_num|between:6,12|confirmed',
		'password_confirmation'=>'required|alpha_num|between:6,12',

	);





// 	private function getValidationRules($rules)
// {
//     if ($rules == update)
//     {
//         return array(
//         	'firstname'=>'required',
// 			'lastname'=>'required',
// 			'username'=>'required|username|unique:users',
//         );
//     } else {
//         return array(
//         	'firstname'=>'required',
// 			'lastname'=>'required',
// 			'username'=>'required|username|unique:users',
// 			'password'=>'required|alpha_num|between:6,12|confirmed',
// 			'password_confirmation'=>'required|alpha_num|between:6,12'
//         );
//     }
// }




/*		public function votes()
	{
		return $this->belongsToMany('Make')->withPivot('votes');
	}*/


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}




public function getRememberToken()
{
    return $this->remember_token;
}

public function setRememberToken($value)
{
    $this->remember_token = $value;
}

public function getRememberTokenName()
{
    return 'remember_token';
}


}