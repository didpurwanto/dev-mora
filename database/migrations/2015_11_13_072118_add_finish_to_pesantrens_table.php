<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFinishToPesantrensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pesantrens', function(Blueprint $table)
		{
			$table->smallInteger('finish')->after('province_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pesantrens', function(Blueprint $table)
		{
			$table->dropColumn('finish');
		});
	}

}
