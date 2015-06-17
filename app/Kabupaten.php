<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model {

	protected $table = 'kabupatens';
	
	public $timestamps = false;
	
	public function province()
	{
         return $this->belongsTo('Province');
    }
	
	public function kecamatans()
	{
		return $this->hasMany('Kecamatan');
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
