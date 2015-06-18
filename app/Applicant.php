<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

	protected $table = "applicants";

	protected $guraded = ['id'];
	
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
}
