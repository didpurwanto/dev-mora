<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMaxageMaxGradyearToPesantrenType extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pesantren_types', function(Blueprint $table)
		{
			$table->integer('max_age');
			$table->integer('max_graduate');
		});
	}

}
