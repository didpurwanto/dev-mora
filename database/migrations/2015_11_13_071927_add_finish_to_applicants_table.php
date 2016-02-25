<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFinishToApplicantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('applicants', function(Blueprint $table)
		{
			$table->smallInteger('finish')->after('registration_number');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('applicants', function(Blueprint $table)
		{
			$table->dropColumn('finish');
		});
	}

}
