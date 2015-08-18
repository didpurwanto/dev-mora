<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model {

	protected $table = 'provinces';

	public $timestamps = false;

	/* Disable Kabupatens
	public function kabupatens()
	{
         return $this->hasMany('App\Kabupaten');
  }*/

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
