<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudy extends Model {

	protected $table = 'program_studies';
	
	public function schools()
	{
		return $this->hasMany('App\School');
	}

}
