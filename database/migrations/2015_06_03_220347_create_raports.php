<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRaports extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('raports', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('applicant_id');
			$table->string('subject_1', 50);
			$table->string('subject_2', 50);
			$table->string('subject_3', 50);
			$table->string('subject_4', 50);
			$table->string('subject_5', 50);
			$table->string('ranking', 50);
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
		Schema::drop('raports');
	}

}
