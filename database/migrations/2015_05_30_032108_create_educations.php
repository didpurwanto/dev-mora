<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('educations', function($table)
		{
			$table->increments('id');
			$table->string('pesantren_name', 150);
			$table->string('kiai_name', 100);
			$table->string('nipp', 20);
			$table->string('pesantren_type', 20);
			$table->string('pesantren_address',255);
			$table->integer('pesantren_province_id');
			$table->string('school_name', 150);
			$table->string('school_principal_name');
			$table->string('nisn', 20);
			$table->string('school_status', 20);
			$table->string('graduate_year',4);
			$table->string('school_type',20);
			$table->string('school_major', 30);
			$table->string('school_location',10);
			$table->string('school_address',255);
			$table->integer('school_province_id');
			$table->string('raport_score',255);
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
		Schema::drop('educations');	
	}

}
