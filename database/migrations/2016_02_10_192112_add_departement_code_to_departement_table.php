<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepartementCodeToDepartementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('departements', function(Blueprint $table)
		{
			$table->integer('departement_code')->after('departement_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('departements', function(Blueprint $table)
		{
			$table->dropColumn('departement_code');
		});
	}

}
