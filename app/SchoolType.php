<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolType extends Model {

	protected $table = 'school_types';

	public $timestamps = false;

	protected $fillable = [
		'type_code',
		'type_name',
		'max_age',
		'max_graduate'
	];

	public function schools()
	{
		return $this->hasMany('App\School');
	}

}
