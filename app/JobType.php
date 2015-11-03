<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model {

	protected $table = 'job_types';

    public $timestamps = false;

	protected $fillable = [
		'id',
		'job_name'
	];

	public function families()
	{
		return $this->hasMany('App\Family','father_job_id','id');
	}

}
