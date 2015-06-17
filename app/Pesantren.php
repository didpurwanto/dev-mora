<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesantren extends Model {

	protected $table = 'pesantrens';
	
	protected $guarded = ['id', 'applicant_id'];
	
	public function pesantrenType()
	{
		return $this->belongsTo('PesantrenType');
	}

}
