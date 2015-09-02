<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudy extends Model {

	protected $table = 'program_studies';

	public function schools()
	{
		return $this->hasMany('App\School');
	}

	/**
	 * Many to many relationships
	 */
	public function departements()
	{
		return $this->belongsToMany('App\Departement','departements_program_studies','program_study_id','departement_id');
	}

}
