<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesantren extends Model {

	protected $table = 'pesantrens';

	protected $guarded = ['id', 'user_id'];

	public function pesantrenType()
	{
		return $this->belongsTo('App\PesantrenType');
	}

	public function province()
	{
		return $this->belongsTo('App\Province');
	}

}
