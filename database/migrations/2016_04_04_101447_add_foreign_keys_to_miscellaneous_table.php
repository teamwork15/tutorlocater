<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMiscellaneousTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('miscellaneous', function(Blueprint $table)
		{
			$table->foreign('type_id', 'FKmiscellane833817')->references('id')->on('miscellaneous_types')->onUpdate('cascade')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('miscellaneous', function(Blueprint $table)
		{
			$table->dropForeign('FKmiscellane833817');
		});
	}

}
