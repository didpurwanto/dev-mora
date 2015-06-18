<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model {

	protected $table = 'families';
	
	public $guarded = ['id','applicant_id'];
	
	public function educationLevel()
	{
		return $this->belongsTo('App\EducationLevel');
	}
	
	public function jobType()
	{
		return $this->belongsTo('App\JobType');
	}
	
	public function rangeSalary()
	{
		return $this->belongsTo('App\RangeSalary');
	}
}
