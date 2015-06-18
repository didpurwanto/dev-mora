<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model {

	protected $table = 'kecamatans';
	
	public $timestamps = false;

	public function kabupaten()
	{
		return $this->belongsTo('App\Kabupaten');
	}
	
	public function schools()
	{
         return $this->hasMany('App\School');
    }
	
	public function pesantrens()
	{
         return $this->hasMany('App\Pesantren');
    }
	
	public function families()
	{
         return $this->hasMany('App\Family');
    }
	
	public function applicants()
	{
         return $this->hasMany('App\Applicant');
    }
}
