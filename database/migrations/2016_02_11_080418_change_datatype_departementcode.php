<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDatatypeDepartementcode extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('departements', function(Blueprint $table)
			{
				$table->string('departement_code', 5)->nullable()->change();
			})	;
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
