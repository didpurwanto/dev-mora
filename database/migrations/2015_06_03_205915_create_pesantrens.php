<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesantrens extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesantrens', function($table)
		{
			$table->increments('id');
			$table->integer('applicant_id');			
			$table->string('pesantren_name', 150);
			$table->string('kiai_name', 100);
			$table->string('nipp', 20);
			$table->string('pesantren_type', 20);
			$table->string('pesantren_address',255);
			$table->integer('province_id');
			$table->integer('kabupaten_id');
			$table->integer('kecamatan_id');

		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pesantrens');
	}

}