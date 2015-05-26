<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model {

	//
	protected $table ="departements";
	
	protected $fillable = [
		'departement_name'
	];
	
	public function university()
	{
		return $this->belongsTo('App\University');
	}
	
	public function getUniversityName()
	{
		return University::where('id',$this->university_id)->first()->university_name;
	}
}