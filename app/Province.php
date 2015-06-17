<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model {

	protected $table = 'provinces';
	
	public $timestamps = false;
	
	public function kabupatens()
	{
         return $this->hasMany('Kabupaten');
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
