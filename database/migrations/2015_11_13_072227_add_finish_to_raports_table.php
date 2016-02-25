<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFinishToRaportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('raports', function(Blueprint $table)
		{
			$table->smallInteger('finish')->after('ranking');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('raports', function(Blueprint $table)
		{
			$table->dropColumn('finish');
		});
	}

}
