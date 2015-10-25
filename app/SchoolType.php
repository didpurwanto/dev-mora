<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolType extends Model {

	protected $table = 'school_types';
	
	public function schools()
	{
		return $this->hasMany('App\School');
	}

}
