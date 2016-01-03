<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNoTelpToPesantrensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pesantrens', function(Blueprint $table)
		{
			$table->string('no_telp')->after('pesantren_address');
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
			$table->dropColumn('no_telp');
		});
	}

}
