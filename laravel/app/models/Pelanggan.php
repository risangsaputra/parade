<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
class Pelanggan extends Eloquent implements UserInterface, RemindableInterface {
	use UserTrait, RemindableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pelanggan';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * get the unique identifier for the User
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	*get the password for the user.
	*
	* @return string
	*/
	public function getAuthPassword()
	{
		return $this->Password;
	} 


}