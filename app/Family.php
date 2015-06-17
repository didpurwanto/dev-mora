<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model {

	protected $table = 'families';
	
	public $guarded = ['id','applicant_id'];

}
