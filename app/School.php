<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	protected $table = 'schools';
	
	protected $guarded = ['id','applicant_id'];

}
