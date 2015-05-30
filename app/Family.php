<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model {

	protectes $table = 'families';
	
	public $fillable = [
		'father_name',
		'father_age',
		'father_deceased',
		'father_address',
		'father_province_id',
		'father_job_id',
		'father_income_id',
		'mother_name',
		'mother_age',
		'mother_deceased',
		'mother_address',
		'mother_province_id',
		'mother_job_id',
		'mother_income_id'	
	];

}
