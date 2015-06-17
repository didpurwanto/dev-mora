<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

	protected $table = 'schools';
	
	protected $guarded = ['id','applicant_id'];
	
	public function schoolType()
	{
		return $this->belongsTo('SchoolType');
	}
	
	public function programStudy()
	{
		return $this->belongsTo('ProgramStudy');
	}
	
	public function province()
	{
		return $this->belongsTo('Province');
	}
	
	public function kabupaten()
	{
		return $this->belongsTo('Kabupaten');
	}
	
	public function kecamatan()
	{
		return $this->belongsTo('Kecamatan');
	}
	

}
