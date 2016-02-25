<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaxageMaxGradyearToSchoolType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('school_types', function(Blueprint $table)
		{
			$table->integer('max_age');
			$table->integer('max_graduate');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('school_types', function(Blueprint $table)
		{
			$table->dropColumn('max_age');
			$table->dropColumn('max_graduate');
		});
	}

}
