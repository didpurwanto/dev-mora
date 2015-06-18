<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model {

	protected $table = 'education_levels';
	
	public function families()
	{
		return $this->hasMany('App\Family');
	}

}
