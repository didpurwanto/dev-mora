<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RangeSalary extends Model {

	protected $table = 'range_salaries';

	public $timestamps = false;

	protected $fillable = [
		'id',
		'range_name'
	];
	
	public function families()
	{
		return $this->hasMany('App\Family','father_salary_id','id');
	}

}
