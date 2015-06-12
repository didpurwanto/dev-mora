<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model {

	protected $table = 'families';
	
	public $fillable = [
		'father_name',
		'father_age',
		'father_deceased',
		'father_education',
		'father_job_id',
		'father_salary_id',
		'mother_name',
		'mother_age',
		'mother_deceased',
		'mother_education',
		'mother_job_id',
		'mother_income_id',
		'address',
		'province_id',
		'kabupaten_id',
		'kecamatan_id'
	];

}
