<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PesantrenType extends Model {

	protected $table = 'pesantren_types';
	
	public function pesantrens()
	{
		return $this->hasMany('Pesantren');
	}

}
