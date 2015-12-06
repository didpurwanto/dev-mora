<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKabupatenToFamiliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('families', function(Blueprint $table)
		{
			$table->string('kabupaten')->after('province_id');
			$table->string('kecamatan')->after('kabupaten');
			$table->string('kelurahan')->after('kecamatan');
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
			$table->dropColumn('kabupaten');
			$table->dropColumn('kecamatan');
			$table->dropColumn('kelurahan');
		});
	}

}
