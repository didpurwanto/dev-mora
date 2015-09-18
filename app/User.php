<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password', 'role'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


  // Relation
	public function applicant()
	{
		return $this->hasOne('App\Applicant');
	}

	public function family()
	{
		return $this->hasOne('App\Family');
	}

	public function pesantren()
	{
		return $this->hasOne('App\Pesantren');
	}

	public function school()
	{
		return $this->hasOne('App\School');
	}

	public function raport()
	{
		return $this->hasOne('App\Raport');
	}

	public function application()
	{
		return $this->hasOne('App\Application');
	}

	/**
	 * Check admin role
	 *
	 * @return bool
	 */
	public function isAdmin()
	{
		return $this->role == '1';
	}

}
