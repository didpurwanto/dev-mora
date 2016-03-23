<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TestLocation extends Model {

	protected $table = "test_locations";

	protected $fillable = [
		'location_name','quota','province_id'
	];

	public function province()
	{
		return $this->belongsTo('App\Province');
	}

	public function applications()
	{
		return $this->hasMany('App\Application');
	}

}
