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
			$table->string('father_name', 50);
			$table->string('father_age', 100);
			$table->boolean('father_deceased');
			$table->string('father_address', 100);
			$table->integer('father_province_id');
			$table->integer('father_job_id');
			$table->integer('father_income_id');
			$table->string('mother_name', 50);
			$table->string('mother_age', 100);
			$table->boolean('mother_deceased');
			$table->string('mother_address', 100);
			$table->integer('mother_province_id');
			$table->integer('mother_job_id');
			$table->integer('mother_income_id');
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
