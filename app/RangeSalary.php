<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RangeSalary extends Model {

	protected $table = 'range_salaries';
	
	public function families()
	{
		return $this->hasMany('App\Family');
	}

}
