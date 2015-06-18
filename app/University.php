<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model {

	//
	protected $table ="universities";
	
	protected $fillable = [
		'university_name'
	];
	
	public function departements()
	{
		return $this->hasMany('App\Departement');
	}
	
	public function applications()
	{
		return $this->hasMany('App\Application');
	}
}