<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PesantrenType extends Model {

	protected $table = 'pesantren_types';
	public $timestamps = false;

	protected $fillable = [
		'id',
		'type_name',
		'max_age',
		'max_graduate'

	];
	
	public function pesantrens()
	{
		return $this->hasMany('App\Pesantren');
	}

}
