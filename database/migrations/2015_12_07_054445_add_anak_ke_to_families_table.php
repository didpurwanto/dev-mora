<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAnakKeToFamiliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('families', function(Blueprint $table)
		{
			$table->smallInteger('anak_ke')->after('user_id');
			$table->smallInteger('saudara')->after('anak_ke');
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
			$table->dropColumn('anak_ke');
			$table->dropColumn('saudara');
		});
	}

}
