<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	protected $table = 'schools';
	
	protected $fillable = [
		'school_name' => 'required',
		'school_principal_name',
		'nisn',
		'school_status',
		'graduate_year',
		'school_type_id',
		'program_study_id',
		'inside_pondok',
		'school_address',
		'province_id',
		'kabupaten_id',
		'kecamatan_id'
	];

}
