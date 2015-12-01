<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model {

	protected $table = 'families';

	public $guarded = ['id','user_id'];

	public function educationLevel()
	{
		return $this->belongsTo('App\EducationLevel', 'father_education','id');
	}

	public function educationLevelIbu()
	{
		return $this->belongsTo('App\EducationLevel', 'mother_education','id');
	}

	public function jobType()
	{
		return $this->belongsTo('App\JobType','father_job_id','id');
	}

	public function jobTypeIbu()
	{
		return $this->belongsTo('App\JobType','mother_job_id','id');
	}

	public function rangeSalary()
	{
		return $this->belongsTo('App\RangeSalary','father_salary_id','id');
	}

	public function province()
	{
		return $this->belongsTo('App\Province');
	}
}
