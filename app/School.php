<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	protected $table = 'schools';
	
	protected $guarded = ['id','applicant_id'];
	
	public function schoolType()
	{
		return $this->belongsTo('App\SchoolType');
	}
	
	public function programStudy()
	{
		return $this->belongsTo('App\ProgramStudy');
	}
	
	public function province()
	{
		return $this->belongsTo('App\Province');
	}
	
	public function kabupaten()
	{
		return $this->belongsTo('App\Kabupaten');
	}
	
	public function kecamatan()
	{
		return $this->belongsTo('App\Kecamatan');
	}
	

}
