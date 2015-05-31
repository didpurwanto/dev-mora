<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model {

	protected $table = 'kabupatens';
	
	public $timestamps = false;
	
	public function province()
	{
         return $this->belongsTo('App\Province');
    }
	
	public function kecamatan()
	{
		return $this->hasMany('App\Kecamatan');
	}

}
