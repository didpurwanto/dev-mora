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
         return $this->hasMany('School');
    }
	
	public function pesantrens()
	{
         return $this->hasMany('Pesantren');
    }
	
	public function families()
	{
         return $this->hasMany('Family');
    }
	
	public function applicants()
	{
         return $this->hasMany('Applicant');
    }
}
