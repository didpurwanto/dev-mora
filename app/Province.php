<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model {

	protected $table = 'provinces';
	
	public $timestamps = false;
	
	public function kabupaten()
	{
         return $this->hasMany('App\Kabupaten');
    }
}
