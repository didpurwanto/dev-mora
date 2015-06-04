<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model {

	protected $table = "applicants";

	protected $fillable = [
		'full_name',
		'email',
		'gender',
		'place_birth',
		'date_birth',
		'recitation',
		'color_blind',
		'mental_disorder',
		'illness',
		'blood_type',
		'weight',
		'height',
		'contact',
		'marriage_status',
		'address',
		'profile_photo',
	];
}
