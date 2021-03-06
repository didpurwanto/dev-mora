<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

	protected $table = "applicants";

	protected $guarded = ['id','user_id'];

	public function province()
	{
		return $this->belongsTo('App\Province');
	}
/*
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
	*/
}
