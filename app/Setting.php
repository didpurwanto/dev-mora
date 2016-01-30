<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $table ="settings";

	protected $fillable = [
		'tahun_lahir',
		'tahun_lulus',
		'nomor_registrasi'

	];

}
