<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolType extends Model {

	protected $table = 'school_types';

	public $timestamps = false;

	protected $fillable = [
		'id',
		'type_name'
	];
	
	public function schools()
	{
		return $this->hasMany('App\School');
	}

}
