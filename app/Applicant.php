<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

	protected $table = "applicants";

	protected $guraded = ['id'];
	
	public function family()
	{
		return $this->hasOne('Family');
	}
	
	public function pesantren()
	{
		return $this->hasOne('Pesantren');
	}
	
	public function school()
	{
		return $this->hasOne('School');
	}
	
	public function raport()
	{
		return $this->hasOne('Raport');
	}
	
	public function raport()
	{
		return $this->hasOne('Application');
	}
}
