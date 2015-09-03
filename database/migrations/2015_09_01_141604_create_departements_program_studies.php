<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartementsProgramStudies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departements_program_studies', function(Blueprint $table)
		{
			$table->integer('departement_id')->unsigned();
			$table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');

			$table->integer('program_study_id')->unsigned();
			$table->foreign('program_study_id')->references('id')->on('program_studies')->onDelete('cascade');
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
		Schema::drop('departements_program_studies');
	}

}
