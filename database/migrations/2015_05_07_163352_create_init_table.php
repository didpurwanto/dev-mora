<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicants', function($table)
		{
			$table->increments('id');
			$table->string('full_name', 100);
			$table->string('email', 50);
			$table->string('gender', 1);
			$table->string('place_birth', 100);
			$table->date('date_birth');
			$table->integer('recitation');
			$table->integer('color_blind');
			$table->integer('mental_disorder');
			$table->string('illness',300);
			$table->string('blood_type',3);
			$table->integer('weight');
			$table->integer('height');
			$table->string('contact', 100);
			$table->string('marriage_status', 20);
			$table->string('address', 255);
			$table->string('province_id', 100);
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
		Schema::drop('Applicants');
	}

}
