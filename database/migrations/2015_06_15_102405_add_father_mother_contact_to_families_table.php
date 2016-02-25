<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFatherMotherContactToFamiliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('families', function(Blueprint $table)
		{
			$table->string('father_contact',100)->after('father_salary_id');
			$table->string('mother_contact',100)->after('mother_salary_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('families', function(Blueprint $table)
		{
			$table->dropColumn('father_contact');
			$table->dropColumn('mother_contact');
		});
	}

}
