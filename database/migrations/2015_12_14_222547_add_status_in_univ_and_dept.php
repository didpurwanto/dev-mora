<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusInUnivAndDept extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('universities', function(Blueprint $table)
		{
			$table->string('status')->after('university_name');
		});

		Schema::table('departements', function(Blueprint $table)
		{
			$table->string('status')->after('departement_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('universities', function(Blueprint $table)
		{
			$table->dropColumn('status');
		});

		Schema::table('departements', function(Blueprint $table)
		{
			$table->dropColumn('status');
		});
	}

}
