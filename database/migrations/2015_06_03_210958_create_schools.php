<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchools extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function($table)
		{
			$table->increments('id');
			$table->integer('applicant_id');
			$table->string('school_name', 150);
			$table->string('school_principal_name');
			$table->string('nisn', 20)->unique();
			$table->string('school_status', 20);
			$table->string('graduate_year',4);
			$table->integer('school_type_id');
			$table->integer('program_study_id');
			$table->boolean('inside_pondok');
			$table->string('school_address',255);
			$table->integer('province_id');
			$table->integer('kabupaten_id');
			$table->integer('kecamatan_id');
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
		Schema::drop('schools');
	}

}