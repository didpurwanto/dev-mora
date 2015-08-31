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

	/* --
	public function application()
	{
		return $this->hasOne('App\Application','major_1_id','id');
	}


	public function getUniversityName()
	{
		return University::where('id',$this->university_id)->first()->university_name;
	}
	--*/
}
