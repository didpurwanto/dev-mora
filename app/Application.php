<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

	protected $table = 'applications';

	public $guarded = ['id','user_id'];

	public function university()
	{
		return $this->belongsTo('App\University');
	}

	public function departement()
	{
		return $this->hasOne('App\Departement','id','major_1_id');
	}

	public function departement2()
	{
		return $this->hasOne('App\Departement','id','major_2_id');
	}

	public function test_location()
	{
		return $this->belongsTo('App\TestLocation');
	}

}
