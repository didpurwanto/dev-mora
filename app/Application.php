<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {

	protected $table = 'applications';

	public $guarded = ['id','applicant_id'];
}
