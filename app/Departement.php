<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model {

	//
	protected $table ="departements";

	protected $guarded = ['id'];

	public function university()
	{
		return $this->belongsTo('App\University');
	}

	/**
	 * Many to many relationships
	 */
	public function program_studies()
	{
		return $this->belongsToMany('App\ProgramStudy','departements_program_studies','departement_id','program_study_id');
	}

	/* --
	public function application()
	{
		return $this->hasOne('App\Application','major_1_id','id');
	}
  */

	public function getUniversityName()
	{
		return University::where('id',$this->university_id)->first()->university_name;
	}

}
