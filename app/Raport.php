<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Raport extends Model {

	protected $table = 'raports';

	protected $guarded = ['id','user_id'];

}
