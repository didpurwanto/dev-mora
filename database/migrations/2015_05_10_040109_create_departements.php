<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartements extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departements', function($table)
		{
			$table->increments('id');
			$table->integer('university_id')->unsigned();
			$table->string('departement_name', '100');
			$table->timestamps();
			$table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Departements');
	}

}
