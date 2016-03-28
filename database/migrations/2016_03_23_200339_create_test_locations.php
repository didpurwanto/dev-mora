<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestLocations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test_locations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('province_id');
			$table->string('location_name');
			$table->timestamps();
		});
	}
}
