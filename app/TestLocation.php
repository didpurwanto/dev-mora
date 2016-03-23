<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TestLocation extends Model {

	protected $table = "test_locations";

	public function province()
	{
		return $this->belongsTo('App\Province');
	}

}
