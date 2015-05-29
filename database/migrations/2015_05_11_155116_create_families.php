<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('families', function($table)
		{
			$table->increments('id');
			$table->string('familiy_name', '50');
			$table->string('relation', '100');
			$table->string('place_birth', '50');
			$table->date('date_birth');
			$table->string('address', '100');
			$table->string('last_education', '100');
			$table->string('job', '100');
			$table->string('salary_per_month', '100');
			$table->string('province_id', '100');
			$table->timestamps();	
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Families');
	}

}
