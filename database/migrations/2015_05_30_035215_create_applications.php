<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applications', function($table)
		{
			$table->increments('id');
			$table->string('applicant_number',20);
			$table->integer('university_id');
			$table->integer('faculty_id');
			$table->integer('major_1_id');
			$table->integer('major_2_id');
			$table->integer('aggree_to_auto_move');
			$table->unique('applicant_number');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applications');
	}

}
