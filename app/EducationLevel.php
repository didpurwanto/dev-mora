<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model {

	protected $table = 'education_levels';

	public $timestamps = false;

	protected $fillable = [
		'id',
		'level_name'
	];

	public function families()
	{
		return $this->hasMany('App\Family','father_education','id');
	}

}
