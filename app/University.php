<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model {

	//
	protected $table ="universities";
	
	protected $fillable = [
		'university_name'
	];
	
	public function departement()
	{
		return $this->hasMany('App\Departement');
	}
}